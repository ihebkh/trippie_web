<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LocateurMobileController extends AbstractController
{
    #[Route('/locateur/mobile', name: 'app_locateur_mobile')]
    public function index(): Response
    {
        return $this->render('locateur_mobile/index.html.twig', [
            'controller_name' => 'LocateurMobileController',
        ]);
    }
}
