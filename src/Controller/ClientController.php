<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Role;
use App\Form\ClientType;
use App\Form\EditCliType;
use App\Repository\ClientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\RoleRepository;
use App\Enum\Etat;

#[Route('/client')]
class ClientController extends AbstractController
{
    #[Route('/', name: 'app_client_index', methods: ['GET'])]
    public function index(ClientRepository $clientRepository): Response
    {
        return $this->render('client/card.html.twig', [
            'clients' => $clientRepository->findAll(),
        ]);
    }

    #[Route('/new/{idRole<\d+>}', name: 'app_client_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ClientRepository $clientRepository,RoleRepository $roleRepository, int $idRole): Response
    {
        $roleRepository = $this->getDoctrine()->getRepository(Role::class);
        $role = $roleRepository->find($idRole);
        
        if (!$role) {
            throw $this->createNotFoundException('Role with id ' . $idRole . ' does not exist.');
        }
        $client = new Client();
        $client->setIdRole($role);
        $client->setEtat(Etat::ENABLED);
        $form = $this->createForm(ClientType::class, $client,['id_role' => $idRole]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('img')->getData();

            if ($file) {
                $uploadsDirectory = $this->getParameter('uploads_directory');
                $imgFilename = $file->getClientOriginalName();
                $file->move($uploadsDirectory, $imgFilename);
                $client->setImg($imgFilename);
            }
            $clientRepository->save($client, true);

            return $this->redirectToRoute('login', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('client/new.html.twig', [
            'id_role' => $idRole,
            'client' => $client,
            'form' => $form,
        ]);
    }

    #[Route('/{id_client}', name: 'app_client_show', methods: ['GET'])]
    public function show(Client $client): Response
    {
        return $this->render('client/show.html.twig', [
            'client' => $client,
        ]);
    }

    #[Route('/{id_client}/edit', name: 'app_client_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Client $client, ClientRepository $repo): Response
    {
        $form = $this->createForm(EditCliType::class, $client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $repo->update($client);
            $file = $form->get('img')->getData();
           
            
            if ($file) {
                $uploadsDirectory = $this->getParameter('uploads_directory');
                $imgFilename = $file->getClientOriginalName();
                $file->move($uploadsDirectory, $imgFilename);
                $client->setImg($imgFilename);
            }
            $this->getDoctrine()->getManager()->flush();

            return $this->render('client/profil.html.twig', [
                'client' => $client
            ]);
        }

        return $this->render('client/edit.html.twig', [
            'client' => $client,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id_client}', name: 'app_client_delete', methods: ['POST'])]
    public function delete(Request $request, Client $client, ClientRepository $clientRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$client->getId_client(), $request->request->get('_token'))) {
            $clientRepository->remove($client, true);
        }

        return $this->redirectToRoute('app_client_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/clients/{id_client}/disable', name: 'disable_client', methods: ['PATCH','POST','GET'])]
public function disableClient(Request $request, Client $client): Response
{
    $client->setEtat(Etat::DISABLED);
    $this->getDoctrine()->getManager()->flush();
    
    return $this->redirectToRoute('app_client_index');
}
#[Route('/{id_client}/profilcl', name: 'profilcl')]
public function profil(Client $client): Response
{
    return $this->render('client/profil.html.twig', [
        'client' => $client,
        'controller_name' => 'ClientController',
    ]);

    
}

#[Route('/client/search', name: 'search2', methods: ['GET','POST'])]
public function search2(Request $request)
{
    $query = $request->get('query');
    $cin = $request->get('cin');
    $nom = $request->get('nom');
    $prenom = $request->get('prenom');
    $email = $request->get('email');
    $etat = $request->get('etat');

    $clients = $this->getDoctrine()
        ->getRepository(Client::class)
        ->advancedSearch($query, $cin, $nom, $prenom, $email, $etat);

    return $this->render('client/card.html.twig', [
        'clients' => $clients,
    ]);
}

}
