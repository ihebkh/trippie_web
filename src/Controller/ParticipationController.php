<?php

namespace App\Controller;

use App\Entity\Participation;
use App\Entity\CoVoiturage;
use App\Form\CoVoiturageType;
use App\Form\ParticipationType;
use App\Repository\ParticipationRepository;
use App\Repository\CoVoiturageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Bridge\Google\Transport\GmailSmtpTransport;
use Symfony\Component\Mailer\Bridge\Google\Transport;
use Symfony\Component\Form\FormTypeInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use SebastianBergmann\Environment\Console;

interface TransportExceptionInterface extends \Throwable
{
}
#[Route('/participation')]
class ParticipationController extends AbstractController
{
    #[Route('/', name: 'app_participation_index', methods: ['GET'])]
    public function index(ParticipationRepository $participationRepository): Response
    {
        return $this->render('participation/index.html.twig', [
            'participations' => $participationRepository->findAll(),
        ]);
    }
    /*
    
    #[Route('/participate/{id}', name: 'app_participate', methods: ['GET', 'POST'])]
    public function participate(
        Request $request, 
        CoVoiturageRepository $coVoiturageRepository, 
        ParticipationRepository $participationRepository, 
        int $id
    ): Response
    {
        // Find the CoVoiturage by id
        $cov = $coVoiturageRepository->find($id);
    
        // Throw an exception if the CoVoiturage does not exist
        if (!$cov) {
            throw $this->createNotFoundException('The CoVoiturage does not exist');
        }
    
        // Create a new Participation instance and a ParticipationType form
        $participation = new Participation();
        $form = $this->createForm(ParticipationType::class, null, [
            'data_class' => null,
            'data' => [
                'id_co' => $id,
            ]
        ]);
    
        // Handle the form submission
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // Create a new email instance and send it using Gmail SMTP
                $email = (new Email())
                    ->from('symfonycopte822@gmail.com')
                    ->to('aymen.rahali@esprit.tn')
                    ->subject('Car Pool Reservation Confirmation')
                    ->text('Dear user,
    Thank you for choosing Trippie. We are pleased to confirm your PArticipation for car 
    As a reminder, please bring a valid driver\'s license and a credit card in your name when you come to pick up the car. If you have any additional questions or special requests, please do not hesitate to contact us.
    We look forward to serving you and hope you have a safe and enjoyable rental experience with us.
    Best regards,
    Trippie');
                $transport = new GmailSmtpTransport('symfonycopte822@gmail.com', 'cdwgdrevbdoupxhn');
                $mailer = new Mailer($transport);
                $mailer->send($email);
            } catch (TransportExceptionInterface $e) {
                // Handle any errors that occur during email sending
                $this->addFlash('error', 'An error occurred while sending the email');
                return $this->redirectToRoute('app_co_voiturage_index_client', [], Response::HTTP_SEE_OTHER);            }
    
            // Set the CoVoiturage id and save the Participation entity
            $participation->setIdCo($cov);
            $participationRepository->save($participation);
    
            // Redirect the user to the client's CoVoiturage index page
            return $this->redirectToRoute('app_co_voiturage_index_client', [], Response::HTTP_SEE_OTHER);
        }
    
        // Render the form view
        return $this->render('participation/newfront.html.twig', [
            'form' => $form->createView(),
            'cov' => $cov,
        ]);
    }
*/

    #[Route('/participate/{id}', name: 'app_participate', methods: ['GET', 'POST'])]
    public function participate(Request $request, CoVoiturageRepository $coVoiturageRepository, ParticipationRepository $participationRepository, int $id): Response
    {
        $cov = $coVoiturageRepository->find($id);

        if (!$cov) {
            throw $this->createNotFoundException('The CoVoiturage does not exist');
        }

        $participation = new Participation();

        $form = $this->createForm(ParticipationType::class, $participation);


        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() && $cov->getNmbrPlace() >= $participation->getNmbrPlacePart()) {
            $participation->setIdCo($cov);
            $participationRepository->save($participation, true);
            $cov->setNmbrPlace($cov->getNmbrPlace() - $participation->getNmbrPlacePart());
            $em = $this->getDoctrine()->getManager();
            $em->persist($participation);
            $em->flush();


            return $this->redirectToRoute('app_co_voiturage_index_client');
        }

        return $this->render('participation/newfront.html.twig', [
            'cov' => $cov,
            'form' => $form->createView(),
        ]);
    }



    #[Route('/new', name: 'app_participation_new', methods: ['GET', 'POST'])]
    public function new2(Request $request, ParticipationRepository $participationRepository): Response
    {
        $participation = new Participation();
        $form = $this->createForm(ParticipationType::class, $participation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $participationRepository->save($participation, true);

            return $this->redirectToRoute('app_participation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('participation/new.html.twig', [
            'participation' => $participation,
            'form' => $form,
        ]);
    }
    #[Route('/{id}', name: 'app_participation_show', methods: ['GET'])]
    public function show(Participation $participation): Response
    {
        return $this->render('participation/show.html.twig', [
            'participation' => $participation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_participation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Participation $participation, ParticipationRepository $participationRepository): Response
    {
        $form = $this->createForm(ParticipationType::class, $participation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $participationRepository->save($participation, true);

            return $this->redirectToRoute('app_participation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('participation/edit.html.twig', [
            'participation' => $participation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_participation_delete', methods: ['POST'])]
    public function delete(Request $request, Participation $participation, ParticipationRepository $participationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $participation->getId(), $request->request->get('_token'))) {
            $participationRepository->remove($participation, true);
        }

        return $this->redirectToRoute('app_participation_index', [], Response::HTTP_SEE_OTHER);
    }
}
