<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;



class UtilisateurMobileController extends AbstractController
{
   


    #[Route("/utilisateur/mobile/AllUsers", name: "list")]
    //* Dans cette fonction, nous utilisons les services NormlizeInterface et StudentRepository, 
    //* avec la méthode d'injection de dépendances.
    public function getUsers(UtilisateurRepository $repo, SerializerInterface $serializer)
    {
        $users = $repo->findAll();
        //* Nous utilisons la fonction normalize qui transforme le tableau d'objets 
        //* students en  tableau associatif simple.
        // $studentsNormalises = $normalizer->normalize($students, 'json', ['groups' => "students"]);

        // //* Nous utilisons la fonction json_encode pour transformer un tableau associatif en format JSON
        // $json = json_encode($studentsNormalises);

        $json = $serializer->serialize($users, 'json', ['groups' => "utilisateurs"]);

        //* Nous renvoyons une réponse Http qui prend en paramètre un tableau en format JSON
        return new Response($json);
    }

    #[Route("/utilisateur/mobile/addUtilisateurJSON/new/{cin}/{nom}/{prenom}", name: "addUtilisateurJSON", methods: ['GET'])]
    public function addUtilisateurJSON(Request $req,   NormalizerInterface $Normalizer)
    {

        $em = $this->getDoctrine()->getManager();
        $user = new Utilisateur();
        $user->setCin($req->get('cin'));
        $user->setNom($req->get('nom'));
        $user->setPrenom($req->get('prenom'));
        $em->persist($user);
        $em->flush();

        $jsonContent = $Normalizer->normalize($user, 'json', ['groups' => 'utilisateurs']);
        return new Response(json_encode($jsonContent));
    }
}
