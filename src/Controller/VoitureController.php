<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\VoitureRepository;
use App\Entity\Voiture;
use App\Form\VoitureFormType;
use Doctrine\ORM\EntityManagerInterface;


class VoitureController extends AbstractController
{
    #[Route('/voiture', name: 'app_voiture')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/VoitureController.php',
        ]);
    }

    #[Route('/voiture/Affichelist', name: 'app_voitureaffiche')]
    public function Affiche(EntityManagerInterface $entityManager)
    {
        //$repo=$this->getDoctrine()->getRepository(Voiture::class);
        $voiture= $entityManager->getRepository(Voiture::class)->findAll();
        return $this->render('voiture/Affiche.html.twig',
            ['voiture' => $voiture]);

    }

}
