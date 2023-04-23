<?php

namespace App\Controller;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use App\Entity\Reclamation;
use App\Form\Reclamation1Type;
use App\Repository\ReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Reponse;
use App\Form\ReponseType;
use App\Repository\ReponseRepository;

#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    #[Route('/', name: 'app_reclamation_index', methods: ['GET'])]
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ReclamationRepository $reclamationRepository): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(Reclamation1Type::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $file = $form->get('image')->getData();

            if ($file) {
                $fileName = uniqid().'.'.$file->guessExtension();
    
                try {
                    $file->move(
                        $this->getParameter('reclamation_images_directory'),
                        $fileName
                    );
                } catch (FileException $e) {
                    // Handle the exception
                }
                $reclamation->setImage($fileName);
            }

            $reclamation->setEtat("non traité");

            $reclamationRepository->save($reclamation, true);

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }


    

     #[Route('/front', name: 'app_reclamation_front', methods: ['GET'])]
    public function front(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/showAll.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_add', methods: ['GET', 'POST'])]
    public function add(Reclamation $reclamation, Request $request, ReponseRepository $reponseRepository, ReclamationRepository $reclamationRepository): Response
    {
        $reponse = new Reponse();
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $reponse->setIdRec($reclamation);
            $reponseRepository->save($reponse, true);

            $reclamation->setEtat("en cours de traitement");
            $reclamationRepository->save($reclamation, true);

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/add.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
            'reclamation' => $reclamation,
        ]);
        
    }

    #[Route('/{id}/rec', name: 'app_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, ReclamationRepository $reclamationRepository): Response
    {
        $form = $this->createForm(Reclamation1Type::class, $reclamation);
        $form->handleRequest($request);
        $originalImage = $reclamation->getImage();

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData(); // get the uploaded file

            if ($imageFile) {
                // generate a unique filename
                $newFilename = uniqid().'.'.$imageFile->guessExtension();
    
                // move the file to the images directory
                $imageFile->move(
                    $this->getParameter('reclamation_images_directory'),
                    $newFilename
                );
    
                // update the entity with the new filename
                $reclamation->setImage($newFilename);
    
                // delete the original image file, if it exists
                if ($originalImage) {
                    $originalImagePath = $this->getParameter('reclamation_images_directory').'/'.$originalImage;
                    if (file_exists($originalImagePath)) {
                        unlink($originalImagePath);
                    }
                }
            } else {
                // use the original image filename
                $reclamation->setImage($originalImage);
            }
            
            $reclamationRepository->save($reclamation, true);

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, ReclamationRepository $reclamationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $reclamationRepository->remove($reclamation, true);
        }

        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}', name: 'app_reclamation_Fdelete', methods: ['POST'])]
    public function deleteF(Request $request, Reclamation $reclamation, ReclamationRepository $reclamationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $reclamationRepository->remove($reclamation, true);
        }

        return $this->redirectToRoute('app_reclamation_front', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/traite', name: 'app_reclamation_traite', methods: ['GET', 'POST'])]
    public function traite(Request $request, Reclamation $reclamation, ReclamationRepository $reclamationRepository): Response
    {
        $reclamation->setEtat("traité");
        $reclamationRepository->save($reclamation, true);

        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }



}
