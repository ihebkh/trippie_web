<?php

namespace App\Controller;

use App\Entity\CoVoiturage;
use App\Entity\Participation;
use App\Repository\CoVoiturageRepository;
use App\Repository\ParticipationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\VoitureRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Doctrine\Persistence\ManagerRegistry;

class CoVoiturageMobileController extends AbstractController
{
    #[Route('/co/voiturage/mobile', name: 'app_co_voiturage_mobile')]
    public function index(): Response
    {
        return $this->render('co_voiturage_mobile/index.html.twig', [
            'controller_name' => 'CoVoiturageMobileController',
        ]);
    }


    //affichage

    #[Route("/co/voiturage/mobile/list", name: "list_co_voiturage")]
    public function getVoiture(CoVoiturageRepository $repo, SerializerInterface $serializer)
    {
        $co_voiturage = $repo->findAll2();
        $json = $serializer->serialize($co_voiturage, 'json', ['groups' => "Co_voiturages"]);
        return new Response($json);
    }



    //show
    #[Route("/co/voiturage/mobile/show/{id}", name: "co_voiturage")]
    public function VoitureId($id, NormalizerInterface $normalizer, CoVoiturageRepository $repo)
    {
        $voiture = $repo->find($id);
        $voitureNormalises = $normalizer->normalize($voiture, 'json', ['groups' => "Co_voiturages"]);
        return new Response(json_encode($voitureNormalises));
    }


    //ajouter
    #[Route("/co/voiturage/addCo_voiturageJSON/new", name: "addCo_voiturageJSON")]
    public function addVoitureJSON(ManagerRegistry $doctrine, Request $req, NormalizerInterface $Normalizer,CoVoiturageRepository $repo )
    {

        $em = $doctrine->getManager();
        $co_voiturage = new CoVoiturage();
        $co_voiturage->setDepart($req->get('depart'));
        $co_voiturage->setDestination($req->get('destination'));
        $co_voiturage->setNmbrPlace($req->get('nmbr_place'));
        $co_voiturage->getCovImg($req->get('img_cov'));
        $co_voiturage->setIdChauff($req->get('id_ch'));
        $em->persist($co_voiturage);
        $em->flush();
        $repo->email();
        //$repo->send_msg('+21692554097');

        $jsonContent = $Normalizer->normalize($co_voiturage, 'json', ['groups' => 'co_voiturages']);
        return new Response(json_encode($jsonContent));
    }
}
