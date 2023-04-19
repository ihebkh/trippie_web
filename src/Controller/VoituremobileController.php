<?php

namespace App\Controller;

use App\Entity\Voiture;
use App\Repository\VoitureRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Doctrine\Persistence\ManagerRegistry;
class VoituremobileController extends AbstractController

{
    #[Route('/voituremobile', name: 'app_voituremobile')]
    public function index(): Response
    {
        return $this->render('voituremobile/index.html.twig', [
            'controller_name' => 'VoituremobileController',
        ]);
    }
//affichage
    #[Route("/voituremobile/list", name: "list")]
    public function getVoiture(VoitureRepository $repo, SerializerInterface $serializer)
    {
        $voitures = $repo->findAll();
        $json = $serializer->serialize($voitures, 'json', ['groups' => "voitures"]);
        return new Response($json);
    }
//show
        #[Route("/voituremobile/{id}", name: "voiture")]
        public function VoitureId($id, NormalizerInterface $normalizer, VoitureRepository $repo)
    {
        $voiture = $repo->find($id);
        $voitureNormalises = $normalizer->normalize($voiture, 'json', ['groups' => "voitures"]);
        return new Response(json_encode($voitureNormalises));
    }
    //ajouter
    #[Route("addVoitureJSON/new", name: "addVoitureJSON")]
    public function addVoitureJSON(ManagerRegistry $doctrine, Request $req,   NormalizerInterface $Normalizer)
    {

        $em = $doctrine->getManager();
        $voiture = new Voiture();
        $voiture->setMatricule($req->get('matricule'));
        $voiture->setMarque($req->get('marque'));
        $voiture->setPuissance($req->get('puissance'));
        $voiture->setPrixJours($req->get('prix_jours'));
        $voiture->setPicture($req->get('picture'));
        $voiture->setEnergie($req->get('energie'));
        $voiture->setEtat($req->get('etat'));
        $voiture->setIdLocateur($req->get('id_locateur'));
        $em->persist($voiture);
        $em->flush();

        $jsonContent = $Normalizer->normalize($voiture, 'json', ['groups' => 'voitures']);
        return new Response(json_encode($jsonContent));
    }
    //update
    #[Route("updateVoitureJSON/{id}", name: "updateVoitureJSON")]
    public function updateVoitureJSON(ManagerRegistry $doctrine, Request $req, $id, NormalizerInterface $Normalizer)
    {

        $em = $doctrine->getManager();
        $voiture = $em->getRepository(Voiture::class)->find($id);
        $voiture->setMatricule($req->get('matricule'));
        $voiture->setMarque($req->get('marque'));
        $voiture->setPuissance($req->get('puissance'));
        $voiture->setPrixJours($req->get('prix_jours'));
        $voiture->setPicture($req->get('picture'));
        $voiture->setEnergie($req->get('energie'));
        $voiture->setEtat($req->get('etat'));
        $voiture->setIdLocateur($req->get('id_locateur'));
        $em->flush();

        $jsonContent = $Normalizer->normalize($voiture, 'json', ['groups' => 'voitures']);
        return new Response("voiture updated successfully " . json_encode($jsonContent));
    }
    #[Route("deleteVoitureJSON/{id}", name: "deleteVoitureJSON")]
    public function deleteVoitureJSON(ManagerRegistry $doctrine, Request $req, $id, NormalizerInterface $Normalizer)
    {

        $em = $doctrine->getManager();
        $voiture = $em->getRepository(Voiture::class)->find($id);
        $em->remove($voiture);
        $em->flush();
        $jsonContent = $Normalizer->normalize($voiture, 'json', ['groups' => 'voitures']);
        return new Response("voiture deleted successfully " . json_encode($jsonContent));
    }
}