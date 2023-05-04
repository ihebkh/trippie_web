<?php

namespace App\Controller;


use App\Service\QrcodeService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     * @param Request $request
     * @param QrcodeService $qrcodeService
     * @return Response
     */
public function index(Request $request, QrcodeService $qrcodeService): Response
{
    $codeCoupon = $request->query->get('code_coupon');
    $type = $request->query->get('type');
    $qrCode = $qrcodeService->qrcode($codeCoupon);

    return $this->render('default/QRcode.html.twig', [
        'qrCode' => $qrCode,
        'codeCoupon' => $codeCoupon,
        'type' => $type,
        
    ]);
}

}