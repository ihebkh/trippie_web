<?php

namespace App\Controller;
use App\Entity\Voiture;
use App\Form\VoitureFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\VoitureRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Service\FileUploader;
use Symfony\Component\HttpFoundation\File\UploadedFile ;
use Doctrine\Common\Collections\ArrayCollection;



class VoitureController extends AbstractController
{
    #[Route('/voiture', name: 'app_voiture')]
    public function index(): Response
    {
        return $this->render('voiture/index.html.twig', [
            'controller_name' => 'VoitureController',
        ]);
    }

    #[Route('/voiture/Affichelist', name: 'app_voitureaffiche')]
    public function Affiche(VoitureRepository $repository)
    {
        //$repo=$this->getDoctrine()->getRepository(Voiture::class);
        $voiture = $repository->findAll();
        return $this->render('voiture/Affiche.html.twig',
            ['voiture' => $voiture]);
    }


    #[Route('/voiture/Affichelistnonreserve', name: 'app_voitureaffichenonreserve')]
    public function Affichernoneserve(VoitureRepository $repository)
    {
        //$repo=$this->getDoctrine()->getRepository(Voiture::class);
        $voiture = $repository->findall();
        return $this->render('voiture/Affichereserve.html.twig',
            ['voiture' => $voiture]);
    }

    #[Route('/voiture/Affichelistreserve', name: 'app_voitureaffichereserve')]
    public function Affichereserve(VoitureRepository $repository)
    {

        $voiture = $repository->findby(['etat' => 'non reservé']);
        return $this->render('voiture/Affichereserve.html.twig',
            ['voiture' => $voiture]);
    }

    #[Route('voiture/deleteVoiture/{id}', name: 'app_DeleteVoiture')]
    public function deleteStatique($id, VoitureRepository $repo, ManagerRegistry $doctrine): Response
    {
        $voiture = $repo->find($id);
        $em = $doctrine->getManager();
        $em->remove($voiture);
        $em->flush();
        return $this->redirectToRoute("app_voitureaffiche");


    }
    #[Route('/updateVoiture/{id}', name: 'updateVoiture')]

    public function updateVoiture(Request $request,ManagerRegistry $doctrine ,Voiture $voiture)
    {
        $form = $this->createForm(VoitureFormType::class, $voiture);
       // $form->add('Update',SubmitType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $file = $form->get('picture')->getData();

            if ($file) {
                $uploadsDirectory = $this->getParameter('uploads_directory');
                $imgFilename = $file->getClientOriginalName();
                $file->move($uploadsDirectory, $imgFilename);
                $voiture->setPicture($imgFilename);
            }
            $entityManager = $doctrine->getManager();
            $entityManager->flush();
            return $this->redirectToRoute('app_voitureaffiche', ['id' => $voiture->getId()]);
        }
        return $this->render('voiture/updateV.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/voiture/add', name: 'addVoiture')]
    public function addVoiture(ManagerRegistry $doctrine, Request $request): Response
    {
        $voiture = new Voiture();
        $form = $this->createForm(VoitureFormType::class, $voiture);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('picture')->getData();

            if ($file) {
                $uploadsDirectory = $this->getParameter('uploads_directory');
                $imgFilename = $file->getClientOriginalName();
                $file->move($uploadsDirectory, $imgFilename);
                $voiture->setPicture($imgFilename);
            }

            $voiture->setEtat("non réservé");
            $em = $doctrine->getManager();
            $em->persist($voiture);
            $em->flush();



            return $this->redirectToRoute('app_voitureaffiche');
        }

        return $this->render('voiture/addV.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/{id}', name: 'app_voiture_show', methods: ['GET'])]
    public function show(Voiture $voiture): Response
    {

        return $this->render('voiture/show.html.twig', [
            'voiture' => $voiture,
        ]);
    }

    #[Route('/{id}', name: 'app_voiture_show1', methods: ['GET'])]
    public function add(Voiture $voiture): Response
    {
          $id = $voiture->getId();
          return $this->redirectToRoute('app_reservation_add', ['id' => $id], Response::HTTP_SEE_OTHER);


    }
}
