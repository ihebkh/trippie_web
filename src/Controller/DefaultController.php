<?php

namespace App\Controller;

use App\Form\SearchType;
use App\Services\QrcodeService;
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
    public function index(QrcodeService $qrcodeService): Response
{
    $qrCode = $qrcodeService->qrcode('https://www.google.com/');
    
    return $this->render('default/index.html.twig', [
        'qrCode' => $qrCode
    ]);
}
}
