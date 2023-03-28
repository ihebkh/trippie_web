<?php

namespace App\Controller;
use App\Entity\Reservation;
use App\Form\ReservationFormType;
use App\Repository\ReservationRepository;
use App\Repository\VoitureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;

class ReservationController extends AbstractController
{ #[Route('/reservation', name: 'app_reservation')]
public function index(): JsonResponse
{
    return $this->json([
        'message' => 'Welcome to your new controller!',
        'path' => 'src/Controller/ReservationController.php',
    ]);
}

    #[Route('/reservation/Affichelist', name: 'app_reservationaffiche')]
    public function Affiche(ReservationRepository $repository)
    {
        $reservation = $repository->findAll();
        return $this->render('reservation/Affiche.html.twig', ['reservation' => $reservation]);
    }
/*
    #[Route('/reservation/Add/{id<\d+>}', name: 'app_reservation_add')]
    function AddS(Request $request , int $id,VoitureRepository $voitureRepository)
    {
        $voiture = $voitureRepository->find($id);
        $reservation = new Reservation();
        $reservation->setIdVoiture($voiture);

        $form = $this->createForm(ReservationFormType::class, $reservation);
        $form->add('Ajouter', SubmitType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();
            return $this->redirectToRoute('app_reservationaffiche');

        }
        return $this->render('reservation/AddR.html.twig', [
            'id_voiture' => $id,
            'form' => $form->createView()
        ]);
    }


*/
    #[Route('voiture/deleteReservation/{id}', name: 'app_DeleteReservation')]
    public function deleteStatique($id, ReservationRepository $repo, ManagerRegistry $doctrine): Response
    {
        $reservation = $repo->find($id);
        $em = $doctrine->getManager();
        $em->remove($reservation);
        $em->flush();
        return $this->redirectToRoute("app_reservationaffiche");


    }
}
