<?php

namespace App\Controller;

use App\Entity\Locateur;
use App\Entity\Role;
use App\Form\LocateurType;
use App\Repository\LocateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\RoleRepository;
use App\Enum\Etat;

#[Route('/locateur')]
class LocateurController extends AbstractController
{
    #[Route('/', name: 'app_locateur_index', methods: ['GET'])]
    public function index(LocateurRepository $locateurRepository): Response
    {
        return $this->render('locateur/index.html.twig', [
            'locateurs' => $locateurRepository->findAll(),
        ]);
    }

    #[Route('/new/{idRole<\d+>}', name: 'app_locateur_new', methods: ['GET', 'POST'])]
    public function new(Request $request, LocateurRepository $locateurRepository,RoleRepository $roleRepository, int $idRole): Response
    {
        $roleRepository = $this->getDoctrine()->getRepository(Role::class);
        $role = $roleRepository->find($idRole);
        
        if (!$role) {
            throw $this->createNotFoundException('Role with id ' . $idRole . ' does not exist.');
        }
        $locateur = new Locateur();
        $locateur->setIdRole($role);
        $locateur->setEtat(Etat::ENABLED);
        $form = $this->createForm(LocateurType::class, $locateur,['id_role' => $idRole]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('img')->getData();

            if ($file) {
                $uploadsDirectory = $this->getParameter('uploads_directory');
                $imgFilename = $file->getClientOriginalName();
                $file->move($uploadsDirectory, $imgFilename);
                $locateur->setImg($imgFilename);
            }
            $locateurRepository->save($locateur, true);

            return $this->redirectToRoute('login', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('locateur/new.html.twig', [
            'id_role' => $idRole,
            'locateur' => $locateur,
            'form' => $form,
        ]);
    }

    #[Route('/{id_loc}', name: 'app_locateur_show', methods: ['GET'])]
    public function show(Locateur $locateur): Response
    {
        return $this->render('locateur/show.html.twig', [
            'locateur' => $locateur,
        ]);
    }

    #[Route('/{id_loc}/edit', name: 'app_locateur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Locateur $locateur, LocateurRepository $locateurRepository): Response
    {
        $form = $this->createForm(LocateurType::class, $locateur);
        $form->handleRequest($request);
        $chauffeur->setEtat(Etat::ENABLED);
        if ($form->isSubmitted() && $form->isValid()) {
            $locateurRepository->save($locateur, true);

            return $this->redirectToRoute('app_locateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('locateur/edit.html.twig', [
            'locateur' => $locateur,
            'form' => $form,
        ]);
    }

    #[Route('/{id_loc}', name: 'app_locateur_delete', methods: ['POST'])]
    public function delete(Request $request, Locateur $locateur, LocateurRepository $locateurRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$locateur->getId_loc(), $request->request->get('_token'))) {
            $locateurRepository->remove($locateur, true);
        }

        return $this->redirectToRoute('app_locateur_index', [], Response::HTTP_SEE_OTHER);
    }
}
