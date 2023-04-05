<?php

namespace App\Controller;
use App\Entity\Reservation;
use App\Entity\Voiture;
use App\Form\ReservationFormType;
use App\Form\VoitureFormType;
use App\Repository\ReservationRepository;
use App\Repository\VoitureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormTypeInterface;




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
        $reservation->setIdVoiture($voiture->getId());

        $form = $this->createForm(ReservationFormType::class, $reservation, [
            'data_class' => Reservation::class,
        ]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
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

    // client
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
    public function Affiche(ReservationRepository $repository)
    {

        $reservation = $repository->findAll();
        return $this->render('reservation/Affiche.html.twig', ['reservation' => $reservation]);
    }

//front
    #[Route('/modifC/{id}', name: 'modifC')]
    public function modifC($id, ReservationRepository $repository, ManagerRegistry $doctrine, Request $request): Response
    {
        $c=$repository->find($id);
        $form=$this->createForm(ReservationFormType::class,$c);
        $form->handleRequest($request);
        if($form->isSubmitted())
        {
            $em=$doctrine->getManager();
            $em->flush();
            return $this->redirectToRoute("app_reservationaffichefront");
        }
        return $this->renderForm('reservation/UpdateRfront.html.twig',
            array("form"=>$form)
        );
    }
    //back
    #[Route('/modifC/back/{id}', name: 'modifC2')]
    public function modifC2($id, ReservationRepository $repository, ManagerRegistry $doctrine, Request $request): Response
    {
        $c=$repository->find($id);
        $form=$this->createForm(ReservationFormType::class,$c);
        $form->handleRequest($request);
        if($form->isSubmitted())
        {
            $em=$doctrine->getManager();
            $em->flush();
            return $this->redirectToRoute("app_reservationaffiche");
        }
        return $this->renderForm('reservation/UpdateR.html.twig',
            array("form"=>$form)
        );
    }

}
