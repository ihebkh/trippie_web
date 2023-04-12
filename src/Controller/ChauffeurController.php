<?php

namespace App\Controller;

use App\Entity\Chauffeur;
use App\Entity\Role;
use App\Entity\Utilisateur;
use App\Form\ChauffeurType;
use App\Repository\ChauffeurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;
use App\Repository\RoleRepository;
use App\Repository\UtilisateurRepository;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\HttpFoundation\File\File;
use App\Enum\Etat;
use App\Form\EditChType;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Common\Annotations\Annotation\Enum;





#[Route('/chauffeur')]
class ChauffeurController extends AbstractController
{
    #[Route('/', name: 'app_chauffeur_index', methods: ['GET'])]
    public function index(ChauffeurRepository $chauffeurRepository): Response
    {
        return $this->render('chauffeur/card.html.twig', [
            'chauffeurs' => $chauffeurRepository->findAll(),
        ]);
    
}


    #[Route('/new/{idRole<\d+>}', name: 'app_chauffeur_new', methods: ['GET', 'POST'])]
    public function new(Request $request,ChauffeurRepository $chauffeurRepository,  RoleRepository $roleRepository, int $idRole): Response
    {
        $roleRepository = $this->getDoctrine()->getRepository(Role::class);
        $role = $roleRepository->find($idRole);
        
        if (!$role) {
            throw $this->createNotFoundException('Role with id ' . $idRole . ' does not exist.');
        }
        $chauffeur = new Chauffeur();
        $chauffeur->setEtat(Etat::ENABLED);
        $chauffeur->setIdRole($role);
        $form = $this->createForm(ChauffeurType::class, $chauffeur,['id_role' => $idRole]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('img')->getData();

            if ($file) {
                $uploadsDirectory = $this->getParameter('uploads_directory');
                $imgFilename = $file->getClientOriginalName();
                $file->move($uploadsDirectory, $imgFilename);
                $chauffeur->setImg($imgFilename);
            }
    
            $chauffeurRepository->save($chauffeur, true);
    

            return $this->redirectToRoute('login', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('chauffeur/new.html.twig', [
            'id_role' => $idRole,
            'chauffeur' => $chauffeur,
            'form' => $form,
        ]);
    }

    #[Route('/{id_ch}', name: 'app_chauffeur_show', methods: ['GET'])]
    public function show(Chauffeur $chauffeur): Response
    {
        return $this->render('chauffeur/show.html.twig', [
            'chauffeur' => $chauffeur,
        ]);
    }

    #[Route('/{id_ch}/edit', name: 'app_chauffeur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Chauffeur $chauffeur, ChauffeurRepository $chauffeurRepository): Response
    {
        $form = $this->createForm(EditChType::class, $chauffeur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $chauffeurRepository->update($chauffeur);
            $file = $form->get('img')->getData();
        
            if ($file) {
                $uploadsDirectory = $this->getParameter('uploads_directory');
                $imgFilename = $file->getClientOriginalName();
                $file->move($uploadsDirectory, $imgFilename);
                $chauffeur->setImg($imgFilename);
            }
           
            $this->getDoctrine()->getManager()->flush();

            return $this->render('chauffeur/profil.html.twig', [
                'chauffeur' => $chauffeur
            ]);
        }

        return $this->render('chauffeur/edit.html.twig', [
            'chauffeur' => $chauffeur,
            'form' => $form->createView(),
        ]);
    }
   /* public function edit(Request $request, Chauffeur $chauffeur, ManagerRegistry $doctrine): Response
    {
        $cin=$chauffeur->getIdRole()->getIdUser()->getCin();
        $nom=$chauffeur->getIdRole()->getIdUser()->getNom();
        $prenom=$chauffeur->getIdRole()->getIdUser()->getPrenom();
       
        $form = $this->createForm(EditChType::class, $chauffeur,[
            'cin' => $cin,
            'nom' => $nom,
            'prenom' => $prenom,

        ]);
        $form->handleRequest($request);
        
       
      
     
        if ($form->isSubmitted() && $form->isValid()) {
            $chauffeur = $form->getData();
            
            
            $file = $form->get('img')->getData();
           
            
            if ($file) {
                $uploadsDirectory = $this->getParameter('uploads_directory');
                $imgFilename = $file->getClientOriginalName();
                $file->move($uploadsDirectory, $imgFilename);
                $chauffeur->setImg($imgFilename);
            }
            $chauffeur->getIdRole()->getIdUser()->setCin($cin);
            $chauffeur->getIdRole()->getIdUser()->setNom($nom);
            $chauffeur->getIdRole()->getIdUser()->setPrenom($prenom);
            $entityManager = $doctrine->getManager();
            $entityManager->flush();

            return $this->render('chauffeur/profil.html.twig', [
                'chauffeur' => $chauffeur
            ]);
        }

        return $this->renderForm('chauffeur/edit.html.twig', [
            'cin' => $cin,
            'nom' => $nom,
            'prenom' => $prenom,
            'chauffeur' => $chauffeur,
            'form' => $form,
        ]);
    }*/

    #[Route('/{id_ch}', name: 'app_chauffeur_delete', methods: ['POST'])]
    public function delete(Request $request, Chauffeur $chauffeur, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$chauffeur->getIdCh(), $request->request->get('_token'))) {
            $entityManager->remove($chauffeur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('login', [], Response::HTTP_SEE_OTHER);
    }

   
#[Route('/chauffeurs/{id_ch}/disable', name: 'disable_chauffeur', methods: ['PATCH','POST','GET'])]
public function disableChauffeur(Request $request, Chauffeur $chauffeur): Response
{
    $chauffeur->setEtat(Etat::DISABLED);
    $this->getDoctrine()->getManager()->flush();
    
    return $this->redirectToRoute('app_chauffeur_index');
}


#[Route('/{id_ch}/profilch', name: 'profilch')]
public function profil(Chauffeur $chauffeur): Response
{
    return $this->render('chauffeur/profil.html.twig', [
        'chauffeur' => $chauffeur,
        'controller_name' => 'ChauffeurController',
    ]);

    
}

}