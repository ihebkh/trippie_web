<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChauffeurMobileController extends AbstractController
{
    #[Route('/chauffeur/mobile', name: 'app_chauffeur_mobile')]
    public function index(): Response
    {
        return $this->render('chauffeur_mobile/index.html.twig', [
            'controller_name' => 'ChauffeurMobileController',
        ]);
    }
}
