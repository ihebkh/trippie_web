<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Client;
use App\Entity\Chauffeur;
use App\Entity\Locateur;
use App\Form\LoginFormType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use App\Enum\Etat;


class LoginController extends AbstractController
{
    private $managerRegistry;

    public function __construct(ManagerRegistry $managerRegistry)
    {
        $this->managerRegistry = $managerRegistry;
     
    }

    #[Route('/login', name: 'login', methods: ['GET','POST'])]
    public function login(Request $request, UrlGeneratorInterface $urlGenerator): Response
    {
       
        $form = $this->createForm(LoginFormType::class);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $data = $form->getData();
        $role = $data['Role'];
        $email = $data['Email'];
        $password = $data['Password'];

        $entityManager = $this->managerRegistry->getManager();

        $user = null;
        if ($role === 'Client') {
            $user = $entityManager->getRepository(Client::class)->findOneBy(['email' => $email]);
            $email= $user->getEmail();
            $pass = $user->getPassword();
            $etat = $user->getEtat();
            
          
            if (!$email) {
                $this->addFlash('error', 'Les informations d\'identification sont incorrectes.');
            } 
            else if ($etat != 'enabled') {
                $this->addFlash('error', 'Le mot de passe est incorrect.');
            }
            else if ($password != $pass) {
                $this->addFlash('error', 'Le mot de passe est incorrect.');
            } else {
                $session = $request->getSession();
                $session->set('user_role', 'Client');
                $session->set('id_client', $user->getIdClient());
                $id_client=$user->getIdClient();
                return new RedirectResponse($urlGenerator->generate('profilcl',['id_client' => $id_client]), Response::HTTP_SEE_OTHER);
            }
        } elseif ($role === 'Chauffeur') {
            $user = $entityManager->getRepository(Chauffeur::class)->findOneBy(['email' => $email]);
            $email= $user->getEmail();
            $pass = $user->getPassword();
            $etat = $user->getEtat();
            if (!$email) {
                $this->addFlash('error', 'Les informations d\'identification sont incorrectes.');
                
            } 
            else if ($etat != 'enabled') {
                $this->addFlash('error', 'Le mot de passe est incorrect.');
            }
            else if ($password != $pass) {
                $this->addFlash('error', 'Le mot de passe est incorrect.');
            }
            else{
                $session = $request->getSession();
                $session->set('user_role', 'Chauffeur');
                $session->set('id_ch', $user->getIdCh());
                $id_ch=$user->getIdCh();
                return new RedirectResponse($urlGenerator->generate('profilch',['id_ch' => $id_ch]), Response::HTTP_SEE_OTHER);
            }
        } elseif ($role === 'Locateur') {
            $user = $entityManager->getRepository(Locateur::class)->findOneBy(['email' => $email]);
            $pass = $user->getPassword();
            $etat = $user->getEtat();
            if (!$email) {
                $this->addFlash('error', 'Les informations d\'identification sont incorrectes.');
            } 
            else if ($etat != 'enabled') {
                $this->addFlash('error', 'Le mot de passe est incorrect.');
            }
            else if ($password != $pass) {
                $this->addFlash('error', 'Le mot de passe est incorrect.');
            } else {
                $session = $request->getSession();
                $session->set('user_role', 'Locateur');
                $session->set('id_loc', $user->getIdLoc());
                $id_loc=$user->getIdLoc();
                return new RedirectResponse($urlGenerator->generate('profilloc',['id_loc' => $id_loc]), Response::HTTP_SEE_OTHER);
            }
        }   
        elseif ($role === 'Admin') {
           
            if ($email === 'admin@tripee.com' && $password === 'admin') {
                $session = $request->getSession();
                $session->set('user_role', 'Admin');
                return new RedirectResponse($urlGenerator->generate('app_dashboard'), Response::HTTP_SEE_OTHER);
           
            }
        }   
    }



    return $this->render('login/login.html.twig', [
        'form' => $form->createView(),
    ]);
    }


    
      
}
