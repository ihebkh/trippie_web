<?php

namespace App\Controller;

use App\Entity\CoVoiturage;
use App\Form\CoVoiturageType;
use App\Repository\CoVoiturageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/co/voiturage')]
class CoVoiturageController extends AbstractController
{
    #[Route('/', name: 'app_co_voiturage_index', methods: ['GET'])]
    public function index(CoVoiturageRepository $coVoiturageRepository): Response
    {
        return $this->render('co_voiturage/index.html.twig', [
            'co_voiturages' => $coVoiturageRepository->findAll(),
        ]);
    }

    #[Route('/index', name: 'app_co_voiturage_index_fornt', methods: ['GET'])]
    public function indexfront(CoVoiturageRepository $coVoiturageRepository): Response
    {
        return $this->render('co_voiturage/indexFront.html.twig', [
            'co_voiturages' => $coVoiturageRepository->findAll(),
        ]);
    }
    #[Route('/index/client', name: 'app_co_voiturage_index_client', methods: ['GET'])]
    public function indexfrontclient(CoVoiturageRepository $coVoiturageRepository): Response
    {
        return $this->render('co_voiturage/indexFrontclient.html.twig', [
            'co_voiturages' => $coVoiturageRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_co_voiturage_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CoVoiturageRepository $coVoiturageRepository): Response
    {
        $coVoiturage = new CoVoiturage();
        $form = $this->createForm(CoVoiturageType::class, $coVoiturage);
        $form->handleRequest($request);
        $file = $form->get('cov_img')->getData();

        if ($form->isSubmitted() && $form->isValid()) {
            if ($file) {
                $uploadsDirectory = $this->getParameter('uploads_directory');
                $imgFilename = $file->getClientOriginalName();
                $file->move($uploadsDirectory, $imgFilename);
                $coVoiturage->setCovImg($imgFilename);
            }
            $coVoiturageRepository->save($coVoiturage, true);

            return $this->redirectToRoute('app_co_voiturage_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('co_voiturage/new.html.twig', [
            'co_voiturage' => $coVoiturage,
            'form' => $form,
        ]);
    }

    #[Route('index/new', name: 'app_co_voiturage_new2', methods: ['GET', 'POST'])]
    public function newFront(Request $request, CoVoiturageRepository $coVoiturageRepository): Response
    {
        $coVoiturage = new CoVoiturage();
        $form = $this->createForm(CoVoiturageType::class, $coVoiturage);
        $form->handleRequest($request);
        $file = $form->get('cov_img')->getData();

        if ($form->isSubmitted() && $form->isValid()) {
            if ($file) {
                $uploadsDirectory = $this->getParameter('uploads_directory');
                $imgFilename = $file->getClientOriginalName();
                $file->move($uploadsDirectory, $imgFilename);
                $coVoiturage->setCovImg($imgFilename);
            }
            $coVoiturageRepository->save($coVoiturage, true);

            return $this->redirectToRoute('app_co_voiturage_index_fornt', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('co_voiturage/newfront.html.twig', [
            'co_voiturage' => $coVoiturage,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_co_voiturage_show', methods: ['GET'])]
    public function show(CoVoiturage $coVoiturage): Response
    {
        return $this->render('co_voiturage/show.html.twig', [
            'co_voiturage' => $coVoiturage,
        ]);
    }

    #[Route('/index/{id}', name: 'app_co_voiturage_show_front', methods: ['GET'])]
    public function showFront(CoVoiturage $coVoiturage): Response
    {
        return $this->render('co_voiturage/showFront.html.twig', [
            'co_voiturage' => $coVoiturage,
        ]);
    }
    #[Route('/index/client/{id}', name: 'app_co_voiturage_show_frontclient', methods: ['GET'])]
    public function showFrontclient(CoVoiturage $coVoiturage): Response
    {
        return $this->render('co_voiturage/showFrontClient.html.twig', [
            'co_voiturage' => $coVoiturage,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_co_voiturage_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CoVoiturage $coVoiturage, CoVoiturageRepository $coVoiturageRepository): Response
    {
        $form = $this->createForm(CoVoiturageType::class, $coVoiturage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $coVoiturageRepository->save($coVoiturage, true);

            return $this->redirectToRoute('app_co_voiturage_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('co_voiturage/edit.html.twig', [
            'co_voiturage' => $coVoiturage,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_co_voiturage_delete', methods: ['POST'])]
    public function delete(Request $request, CoVoiturage $coVoiturage, CoVoiturageRepository $coVoiturageRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$coVoiturage->getId(), $request->request->get('_token'))) {
            $coVoiturageRepository->remove($coVoiturage, true);
        }

        return $this->redirectToRoute('app_co_voiturage_index', [], Response::HTTP_SEE_OTHER);
    }
    //chauffeur 
    #[Route('/chauffeur/{id}', name: 'app_co_voiturage_delete2', methods: ['POST'])]
    public function deleteFront(Request $request, CoVoiturage $coVoiturage, CoVoiturageRepository $coVoiturageRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$coVoiturage->getId(), $request->request->get('_token'))) {
            $coVoiturageRepository->remove($coVoiturage, true);
        }

        return $this->redirectToRoute('app_co_voiturage_index_fornt', [], Response::HTTP_SEE_OTHER);
    }




}
