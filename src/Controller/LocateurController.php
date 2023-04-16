<?php

namespace App\Controller;

use App\Entity\Locateur;
use App\Entity\Role;
use App\Form\LocateurType;
use App\Form\EditLocType;
use App\Repository\LocateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\RoleRepository;
use App\Enum\Etat;
use App\Form\ChangePasswordFormType;
use App\Form\ResetPasswordRequestFormType;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Bridge\Google\Transport\GmailSmtpTransport;
use Symfony\Component\Mime\Header\Headers;
use Symfony\Component\Mailer\Mailer;

#[Route('/locateur')]
class LocateurController extends AbstractController
{
    #[Route('/', name: 'app_locateur_index', methods: ['GET'])]
    public function index(LocateurRepository $locateurRepository): Response
    {
        return $this->render('locateur/card.html.twig', [
            'locateurs' => $locateurRepository->findAll(),
        ]);
    }

    #[Route('/new/{idRole<\d+>}', name: 'app_locateur_new', methods: ['GET', 'POST'])]
    public function new(Request $request, LocateurRepository $locateurRepository,RoleRepository $roleRepository, int $idRole, UserPasswordEncoderInterface $passwordEncoder): Response
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
            $locateur->setPassword($passwordEncoder->encodePassword(
                $locateur,
                $form->get('password')->getData()
            ));
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
    public function edit(Request $request, Locateur $locateur, LocateurRepository $repo): Response
    {
        $form = $this->createForm(EditLocType::class, $locateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $repo->update($locateur);
            $file = $form->get('img')->getData();
           
            
            if ($file) {
                $uploadsDirectory = $this->getParameter('uploads_directory');
                $imgFilename = $file->getClientOriginalName();
                $file->move($uploadsDirectory, $imgFilename);
                $locateur->setImg($imgFilename);
            }
            $this->getDoctrine()->getManager()->flush();

            return $this->render('locateur/profil.html.twig', [
                'locateur' => $locateur
            ]);
        }

        return $this->render('locateur/edit.html.twig', [
            'locateur' => $locateur,
            'form' => $form->createView(),
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

    #[Route('/locateurs/{id_loc}/disable', name: 'disable_locateur', methods: ['PATCH','POST','GET'])]
public function disableLocateur(Request $request, Locateur $locateur): Response
{
    $locateur->setEtat(Etat::DISABLED);
    $this->getDoctrine()->getManager()->flush();
    
    return $this->redirectToRoute('app_locateur_index');
}
#[Route('/{id_loc}/profilloc', name: 'profilloc')]
public function profil(locateur $locateur): Response
{
    return $this->render('locateur/profil.html.twig', [
        'locateur' => $locateur,
        'controller_name' => 'LocateurController',
    ]);

    
}
#[Route('/locateur/search', name: 'search', methods: ['GET','POST'])]
public function search(Request $request)
{
    $query = $request->get('query');
    $cin = $request->get('cin');
    $nom = $request->get('nom');
    $prenom = $request->get('prenom');
    $email = $request->get('email');
    $etat = $request->get('etat');

    $locateurs = $this->getDoctrine()
        ->getRepository(Locateur::class)
        ->advancedSearch($query, $cin, $nom, $prenom, $email, $etat);

    return $this->render('locateur/card.html.twig', [
        'locateurs' => $locateurs,
    ]);
    
}


#[Route('/login/role/reset', name: 'app_forgot_password_request_locateur', methods: ['GET','POST'])]
public function request(Request $request, LocateurRepository $userRepository, TokenGeneratorInterface $tokenGenerator, \Swift_Mailer $mailer): Response
    {
        $form = $this->createForm(ResetPasswordRequestFormType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = $form->get('email')->getData();
            $user = $userRepository->findOneBy(['email' => $email]);

            if (!$user) {
                $this->addFlash('danger', 'Adresse e-mail inconnue.');

                return $this->redirectToRoute('app_forgot_password_request_locateur');
            }

            $token = $tokenGenerator->generateToken();

            try {
                $user->setResetToken($token);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();
            } catch (\Exception $e) {
                $this->addFlash('warning', $e->getMessage());

                return $this->redirectToRoute('app_forgot_password_request_locateur');
            }
           
   

// Create the mailer using the transport
                $transport = new GmailSmtpTransport('aymen58zouari@gmail.com', 'qupoztnbdlklxbhj'); 
                $mailer = new Mailer($transport);
                $emailBody = $this->renderView('login/email.html.twig', [
                    'token' => $token,
                ]);
            $message = (new TemplatedEmail())
                ->from('aymen58zouari@gmail.com')
                ->to($user->getEmail())
                ->subject('Réinitialisation de mot de passe')
                ->html($emailBody);
                
                
                $mailer->send($message);

            $this->addFlash('success', 'Un e-mail de réinitialisation de mot de passe vient de vous être envoyé.');

            return $this->redirectToRoute('login');
        }

        return $this->render('login/request.html.twig', [
            'requestForm' => $form->createView(),
        ]);
    }

   
    #[Route('/login/role/reset/{token}', name: 'app_reset_password', methods: ['GET','POST'])]
    public function reset(Request $request, string $token, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = $this->getDoctrine()->getRepository(Locateur::class)->findOneBy(['resetToken' => $token]);

        if (!$user) {
            $this->addFlash('danger', 'Token de réinitialisation de mot de passe inconnu.');

            return $this->redirectToRoute('login');
        }

        $form = $this->createForm(ChangePasswordFormType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setResetToken(null);
            $user->setPassword($passwordEncoder->encodePassword(
                $user,
                $form->get('plainPassword')->getData()
            ));

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            $this->addFlash('success', 'Mot de passe mis à jour avec succès !');

            return $this->redirectToRoute('login');
        }

        return $this->render('login/reset.html.twig', [
            'resetForm' => $form->createView(),
        ]);
    }







}
