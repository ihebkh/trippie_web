<?php

namespace App\Controller;
use App\Entity\Coupon;
use App\Repository\CouponRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
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
   public function discount(Request $request, CouponRepository $couponRepository): Response
{
    // get the coupon code from the request
    $codeCoupon = $request->request->get('code_coupon');
    
    // if the coupon code is not provided in the request, render the template without a coupon code
    if (!$codeCoupon) {
        return $this->render('home/discount.html.twig');
    }
    
    // get the coupon with the provided code from the database
    $coupon = $couponRepository->findByCodeCoupon($codeCoupon);
    
    // if the coupon is not found, render the template with an error message
    if (!$coupon) {
        $error = 'Coupon code not found';
        return $this->render('home/discount.html.twig', ['error' => $error]);
    }
    
    // render the template with the coupon code and discount rate
    return $this->render('home/discount.html.twig', [
        'code_coupon' => $coupon->getCodeCoupon(),
        'taux' => $coupon->getTaux()
    ]);
}

    
    
}
