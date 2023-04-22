<?php

namespace App\Controller;
use App\Repository\CouponRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
#[Route('/home/roue', name: 'app_roue')]
public function index2(CouponRepository $couponRepository): Response
{
    $taux = $couponRepository->getTaux();
    
    return $this->render('home/indexroue.html.twig', [
        'taux' => $taux,
    ]);
}
    
    
}
