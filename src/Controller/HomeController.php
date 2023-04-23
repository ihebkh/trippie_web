<?php

namespace App\Controller;
use App\Entity\Coupon;
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
        // Get the taux values from the database
        $taux = $couponRepository->getTaux();

        // Pass the taux values to the Twig template
        return $this->render('home/indexroue.html.twig', [
            'taux' => $taux,
        ]);
    }

    #[Route('/home/about', name: 'app_discount')]
    public function discount(CouponRepository $couponRepository): Response
    {
        $codeCoupon = $couponRepository->getCodeCoupon();
    
        return $this->render('home/discount.html.twig', [
            'code_coupon' => $codeCoupon,
        ]);
    }
    
}
