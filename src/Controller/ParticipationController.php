<?php

namespace App\Controller;

use App\Entity\Participation;
use App\Entity\CoVoiturage;
use App\Form\CoVoiturageType;
use App\Form\ParticipationType;
use App\Repository\ParticipationRepository;
use App\Repository\CoVoiturageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/participation')]
class ParticipationController extends AbstractController
{
    #[Route('/', name: 'app_participation_index', methods: ['GET'])]
    public function index(ParticipationRepository $participationRepository): Response
    {
        return $this->render('participation/index.html.twig', [
            'participations' => $participationRepository->findAll(),
        ]);
    }

    #[Route('/participate/{id}', name: 'app_participate', methods: ['GET', 'POST'])]
    public function participate(Request $request, CoVoiturageRepository $coVoiturageRepository, ParticipationRepository $participationRepository, int $id): Response
    {
        $cov = $coVoiturageRepository->find($id);

        if (!$cov) {
            throw $this->createNotFoundException('The CoVoiturage does not exist');
        }

        $id_co = $cov->getId();

        $participation = new Participation();
        $form = $this->createForm(ParticipationType::class, null, [
            'data_class' => null,
            'data' => [
                'id_co' => $cov->getId(),
            ]
        ]);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $participation->setIdCo($id_co);
            $participationRepository->save($participation);

            return $this->redirectToRoute('app_participation_index');
        }

        return $this->render('participation/newfront.html.twig', [
            'cov' => $cov,
            'form' => $form->createView(),
        ]);
    }


    #[Route('/new', name: 'app_participation_new', methods: ['GET', 'POST'])]
    public function new2(Request $request, ParticipationRepository $participationRepository): Response
    {
        $participation = new Participation();
        $form = $this->createForm(ParticipationType::class, $participation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $participationRepository->save($participation, true);

            return $this->redirectToRoute('app_participation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('participation/new.html.twig', [
            'participation' => $participation,
            'form' => $form,
        ]);
    }
    #[Route('/{id}', name: 'app_participation_show', methods: ['GET'])]
    public function show(Participation $participation): Response
    {
        return $this->render('participation/show.html.twig', [
            'participation' => $participation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_participation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Participation $participation, ParticipationRepository $participationRepository): Response
    {
        $form = $this->createForm(ParticipationType::class, $participation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $participationRepository->save($participation, true);

            return $this->redirectToRoute('app_participation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('participation/edit.html.twig', [
            'participation' => $participation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_participation_delete', methods: ['POST'])]
    public function delete(Request $request, Participation $participation, ParticipationRepository $participationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $participation->getId(), $request->request->get('_token'))) {
            $participationRepository->remove($participation, true);
        }

        return $this->redirectToRoute('app_participation_index', [], Response::HTTP_SEE_OTHER);
    }
}
