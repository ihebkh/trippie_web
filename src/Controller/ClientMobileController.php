<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientMobileController extends AbstractController
{
    #[Route('/client/mobile', name: 'app_client_mobile')]
    public function index(): Response
    {
        return $this->render('client_mobile/index.html.twig', [
            'controller_name' => 'ClientMobileController',
        ]);
    }
}
