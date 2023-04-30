<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RoleMobileController extends AbstractController
{
    #[Route('/role/mobile', name: 'app_role_mobile')]
    public function index(): Response
    {
        return $this->render('role_mobile/index.html.twig', [
            'controller_name' => 'RoleMobileController',
        ]);
    }
}
