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

use Twilio\Rest\Client;
use App\Service\AjoutNotificationService;
use Dompdf\Dompdf;

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
    public function new(Request $request, ReclamationRepository $reclamationRepository, AjoutNotificationService $notifcationService): Response
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

            $notifcationService->sendEmail();

            /*$sid    = "ACac8596dd282c3072d3da4dbb09625ab1";
            $token  = "e0f542fecc731d9f8e9d87a4709aae32";
            $twilio = new Client($sid, $token);

            $message = $twilio->messages
                ->create("+21654833493", // to
                    array(
                            "from" => "+12766226225",
                            "body" => "Votre réclamation est recu !!!"
                        )
                    );*/

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/search', name: 'search')]
    public function search(Request $request, ReclamationRepository $repository): Response
    {
        $value = $request->request->get('value');
        $reclamation = $repository->searchBynom($value);
        return $this->render('reclamation/search.html.twig', [
            'reclamations' => $reclamation
        ]);
    }


    #[Route('/newF', name: 'app_reclamation_newF', methods: ['GET', 'POST'])]
    public function newF(Request $request, ReclamationRepository $reclamationRepository, AjoutNotificationService $notifcationService): Response
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

            $notifcationService->sendEmail();

            /*$sid    = "ACac8596dd282c3072d3da4dbb09625ab1";
            $token  = "e0f542fecc731d9f8e9d87a4709aae32";
            $twilio = new Client($sid, $token);

            $message = $twilio->messages
                ->create("+21654833493", // to
                    array(
                            "from" => "+12766226225",
                            "body" => "Votre réclamation est recu !!!"
                        )
                    );*/

            return $this->redirectToRoute('app_reclamation_front', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/newF.html.twig', [
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

    #[Route('/{id}/rep', name: 'app_reclamation_add', methods: ['GET', 'POST'])]
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

    #[Route('/front/{id}', name: 'app_reclamation_Fdelete', methods: ['POST'])]
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

    #[Route('/stat', name: 'app_reclamation_stat', methods: ['POST','GET'])]
    public function stat( ReclamationRepository $repo): Response
    {
        $total = $repo->countByLibelle('Technique') +
            $repo->countByLibelle('Eco') +
            $repo->countByLibelle('Other');

        $TechniqueCount = $repo->countByLibelle('Technique');
        $EcoCount = $repo->countByLibelle('Eco');
        $OtherCount = $repo->countByLibelle('Other');


        $TechniquePercentage = round(($TechniqueCount / $total) * 100);
        $EcoPercentage = round(($EcoCount / $total) * 100);
        $OtherPercentage = round(($OtherCount / $total) * 100);
        return $this->render('reclamation/stat.html.twig', [
            'TechniquePercentage' => $TechniquePercentage,
            'EcoPercentage' => $EcoPercentage,
            'OtherPercentage' => $OtherPercentage,

        ]);
    }

    #[Route('/exportpdf', name: 'exportpdf')]
    public function exportToPdf(ReclamationRepository $repository): Response
    {
        // Récupérer les données de réservation depuis votre base de données
        $reclamations = $repository->findAll();

        // Créer le tableau de données pour le PDF
        $tableData = [];
        foreach ($reclamations as $reclamation) {
            $tableData[] = [
                'type' => $reclamation->getType(),
                'commentaire' => $reclamation->getCommentaire(),
                'etat' => $reclamation->getEtat(),
                //'price' => $reservation->getIdVoiture()->getPrixJours(), jointure
                'date_creation' => $reclamation->getDateCreation()->format('Y-m-d H:i:s'),
            ];
        }

        // Créer le PDF avec Dompdf
        $dompdf = new Dompdf();
        $html = $this->renderView('reclamation/export-pdf.html.twig', [
            'tableData' => $tableData,
        ]);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        // Envoyer le PDF au navigateur
        $response = new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="reclamation.pdf"',
        ]);
        return $response;
    }



}
