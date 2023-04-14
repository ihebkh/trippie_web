<?php

namespace App\Controller;

use App\Service\WeatherService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class WeatherController extends AbstractController
{
    public function index(WeatherService $weatherService): Response
    {
        $weather = $weatherService->getWeather('London');
        return $this->render('weather/index.html.twig', [
            'weather' => $weather,
        ]);
    }
}
