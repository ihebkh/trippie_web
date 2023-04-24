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
        // Get the taux and type values from the database
        $coupons = $couponRepository->findAll();
        $taux = [];
       
        
        foreach ($coupons as $coupon) {
            $taux[] = $coupon->getTaux();
            
        }
        shuffle($taux); // shuffle the array to randomize the order
    
        // Pass the taux and type values to the Twig template
        return $this->render('home/indexroue.html.twig', [
            'taux' => $taux,
            
        ]);
    }
    
    #[Route('/coupon/code_coupon/{taux}', name: 'app_code_coupon')]
    public function getCodeCouponByTaux(CouponRepository $couponRepository, $taux): Response
    {
        $coupon = $couponRepository->findOneBy(['taux' => $taux]);
    
        if (!$coupon) {
            throw $this->createNotFoundException('Coupon code not found');
        }
    
        return new Response($coupon->getCodeCoupon());
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
