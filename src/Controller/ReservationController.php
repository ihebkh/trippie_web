<?php

namespace App\Controller;
use App\Entity\Reservation;
use App\Entity\Voiture;
use App\Form\ReservationFormType;
use App\Form\VoitureFormType;
use App\Repository\ReservationRepository;
use App\Repository\VoitureRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormTypeInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Bridge\Google\Transport\GmailSmtpTransport;
use Symfony\Component\Mailer\Bridge\Google\Transport;



class ReservationController extends AbstractController
{
    #[Route('/reservation', name: 'app_reservation')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ReservationController.php',
        ]);
    }



//front
    #[Route('/reservation/Add/{id<\d+>}', name: 'app_reservation_add')]
    public function addReservation(Request $request, int $id, VoitureRepository $voitureRepository): Response
    {
        $voiture = $voitureRepository->find($id);

        $reservation = new Reservation();

        $form = $this->createForm(ReservationFormType::class, $reservation, [
            'data_class' => Reservation::class,
        ]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $email =(new Email())
                ->from('symfonycopte822@gmail.com')
                ->to ('khmiri.iheb@esprit.tn')
                ->subject('Car Rental Reservation Confirmation')
                ->text('Dear user,

Thank you for choosing to rent a car from Trippie. We are pleased to confirm your reservation  for car 
As a reminder, please bring a valid driver\'s license and a credit card in your name when you come to pick up the car. If you have any additional questions or special requests, please do not hesitate to contact us.

We look forward to serving you and hope you have a safe and enjoyable rental experience with us.

Best regards,
Trippie');
            $transport= new GmailSmtpTransport('symfonycopte822@gmail.com','cdwgdrevbdoupxhn');
            $mailer= new Mailer($transport);
            $mailer->send($email);

            $voiture->setEtat("reservé");
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();
            return $this->redirectToRoute('app_reservationaffichefront');
        }
        return $this->render('reservation/AddR.html.twig', [
            'id' => $id,
            'form' => $form->createView(),
        ]);

    }




//delete back

    #[Route('voiture/deleteReservation/{id}', name: 'app_DeleteReservation')]
    public function deleteStatique($id, ReservationRepository $repo, ManagerRegistry $doctrine): Response
    {
        $reservation = $repo->find($id);
        $em = $doctrine->getManager();
        $em->remove($reservation);
        $em->flush();
        return $this->redirectToRoute("app_reservationaffiche");


    }

    // clientsymfo
    #[Route('/reservation/client/Affichelist', name: 'app_reservationaffichefront')]
    public function Affichefront(ReservationRepository $repository)
    {
        // $reservation = $repository->findBy(['idClient' => '30']);
        $reservation = $repository->findAll();
        return $this->render('reservation/Afficheclient.html.twig', ['reservation' => $reservation]);
    }

    //delete front
    #[Route('voiture/client/deleteReservation/{id}', name: 'app_DeleteReservation2')]
    public function deleteStatique2($id, ReservationRepository $repo, ManagerRegistry $doctrine): Response
    {
        $reservation = $repo->find($id);
        $em = $doctrine->getManager();
        $em->remove($reservation);
        $em->flush();
        return $this->redirectToRoute("app_reservationaffichefront");
    }

//back
    #[Route('/reservation/Affichelist', name: 'app_reservationaffiche')]
    public function Affiche(ReservationRepository $repository,PaginatorInterface $paginator,Request $request)
    {

        $reservation = $repository->findAll();
        $reservation = $paginator->paginate(
            $reservation, /* query NOT result */
            $request->query->getInt('page', 1),
            5
        );



        return $this->render('reservation/Affiche.html.twig', ['reservation' => $reservation]);
    }

//front
    #[Route('/modifC/{id}', name: 'modifC')]
    public function modifC($id, ReservationRepository $repository, ManagerRegistry $doctrine, Request $request): Response
    {
        $c = $repository->find($id);
        $form = $this->createForm(ReservationFormType::class, $c);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $doctrine->getManager();
            $em->flush();
            return $this->redirectToRoute("app_reservationaffichefront");
        }
        return $this->renderForm('reservation/UpdateRfront.html.twig',
            array("form" => $form)
        );
    }

    //back
    #[Route('/modifC/back/{id}', name: 'modifC2')]
    public function modifC2($id, ReservationRepository $repository, ManagerRegistry $doctrine, Request $request): Response
    {
        $c = $repository->find($id);
        $form = $this->createForm(ReservationFormType::class, $c);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $doctrine->getManager();
            $em->flush();
            return $this->redirectToRoute("app_reservationaffiche");
        }
        return $this->renderForm('reservation/UpdateR.html.twig',
            array("form" => $form)
        );
    }

}
