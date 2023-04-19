<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Repository\VoitureRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;

class ReservationmobileController extends AbstractController
{
    #[Route('/reservationmobile', name: 'app_reservationmobile')]
    public function index(): Response
    {
        return $this->render('reservationmobile/index.html.twig', [
            'controller_name' => 'ReservationmobileController',
        ]);
    }
    #[Route("/Reservationmobile/list", name: "list")]
    public function getReservation(ReservationRepository $repo, SerializerInterface $serializer)
    {
        $reservations = $repo->findAll();
        $json = $serializer->serialize($reservations, 'json', ['groups' => "reservations"]);
        return new Response($json);
    }

    #[Route("/reservationmobile/{id}", name: "reservation")]
    public function ReservationId($id, NormalizerInterface $normalizer, VoitureRepository $repo)
    {
        $reservation = $repo->find($id);
        $reservationNormalises = $normalizer->normalize($reservation, 'json', ['groups' => "reservations"]);
        return new Response(json_encode($reservationNormalises));
    }
    #[Route("addReservationJSON/new", name: "addReservationJSON")]
    public function addReservationJSON(ManagerRegistry $doctrine, Request $req,   NormalizerInterface $Normalizer)
    {

        $em = $doctrine->getManager();
        $reservation = new Reservation();
        $reservation->setDateDebut($req->get('dateDebut'));
        $reservation->setDateFin($req->get('dateFin'));
        $reservation->setIdClient($req->get('id_client'));
        $em->persist($reservation);
        $em->flush();

        $jsonContent = $Normalizer->normalize($reservation, 'json', ['groups' => 'reservations']);
        return new Response(json_encode($jsonContent));
    }
    #[Route("updateReservationJSON/{id}", name: "updateReservationJSON")]
    public function updateReservationJSON(ManagerRegistry $doctrine, Request $req, $id, NormalizerInterface $Normalizer)
    {

        $em = $doctrine->getManager();
        $reservation = $em->getRepository(Reservation::class)->find($id);
        $reservation->setDateDebut($req->get('dateDebut'));
        $reservation->setDateFin($req->get('dateFin'));
        $reservation->setIdClient($req->get('id_client'));
        $em->flush();

        $jsonContent = $Normalizer->normalize($reservation, 'json', ['groups' => 'reservations']);
        return new Response("reservation updated successfully " . json_encode($jsonContent));
    }
    #[Route("deleteReservationJSON/{id}", name: "deletereservationJSON")]
    public function deleteReservationJSON(ManagerRegistry $doctrine, Request $req, $id, NormalizerInterface $Normalizer)
    {

        $em = $doctrine->getManager();
        $reservation = $em->getRepository(Reservation::class)->find($id);
        $em->remove($reservation);
        $em->flush();
        $jsonContent = $Normalizer->normalize($reservation, 'json', ['groups' => 'reservations']);
        return new Response("reservation deleted successfully " . json_encode($jsonContent));
    }
}
