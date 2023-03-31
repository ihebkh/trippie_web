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

    #[Route('/new', name: 'app_co_voiturage_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CoVoiturageRepository $coVoiturageRepository): Response
    {
        $coVoiturage = new CoVoiturage();
        $form = $this->createForm(CoVoiturageType::class, $coVoiturage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $coVoiturageRepository->save($coVoiturage, true);

            return $this->redirectToRoute('app_co_voiturage_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('co_voiturage/new.html.twig', [
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
}
