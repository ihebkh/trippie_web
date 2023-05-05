<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Highscores;
use App\Entity\Client;

class UnityGameController extends AbstractController
{
    #[Route('/unity-game/{id_client}/', name: 'unity_game')]
    public function index(int $id_client,EntityManagerInterface $entityManager): Response
    {
        $userRepository = $this->getDoctrine()->getRepository(Client::class);
        $client = $userRepository->find($id_client);
        $id = 294;
        $highscores = $entityManager
            ->getRepository(Highscores::class)
            ->find($id);
        $highscores->setScore(1000);
        $entityManager->persist($highscores);
        $entityManager->flush();
        return $this->render('unity_game/index.html.twig',[
            'client'=>$client,
            'id_client'=>$id_client,
        ]);
    }
}
