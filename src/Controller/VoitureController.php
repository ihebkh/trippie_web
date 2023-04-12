<?php

namespace App\Controller;
use App\Entity\Voiture;
use App\Form\VoitureFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\VoitureRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Service\FileUploader;
use Symfony\Component\HttpFoundation\File\UploadedFile ;
use Doctrine\Common\Collections\ArrayCollection;
use Knp\Bundle\PaginatorBundle\KnpPaginatorBundle;
use Knp\Component\Pager\PaginatorInterface;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Writer\PngWriter;



class VoitureController extends AbstractController
{
    #[Route('/voiture', name: 'app_voiture')]
    public function index(): Response
    {
        return $this->render('voiture/index.html.twig', [
            'controller_name' => 'VoitureController',
        ]);
    }

//admin
    #[Route('/voiture/Affichelist', name: 'app_voitureaffiche')]
    public function Affiche(VoitureRepository $repository,PaginatorInterface $paginator,Request $request)
    {
        $voiture = $repository->findall();
        $voiture = $paginator->paginate(
            $voiture, /* query NOT result */
            $request->query->getInt('page', 1),
            5
        );
        return $this->render('voiture/Affiche.html.twig', [
            'voiture' => $voiture,
        ]);
    }

//locateur
    #[Route('/voiture/Affichelocateur', name: 'app_voitureaffichenonreserve')]
    public function Affichernoneserve(VoitureRepository $repository,PaginatorInterface $paginator,Request $request)
    {

        $voiture = $repository->findall();
        //$voiture = $repository->findBy(idLocateur=);
        return $this->render('voiture/Affichereserve.html.twig',
            ['voiture' => $voiture]);
    }

//admin
    #[Route('voiture/deleteVoiture/{id}', name: 'app_DeleteVoiture')]
    public function deleteStatique($id, VoitureRepository $repo, ManagerRegistry $doctrine): Response
    {
        $voiture = $repo->find($id);
        $em = $doctrine->getManager();
        $em->remove($voiture);
        $em->flush();
        return $this->redirectToRoute("app_voitureaffiche");


    }

    //locateur
    #[Route('/voiture/locateurvoiture/deleteVoiture/{id}', name: 'app_DeleteVoiture2')]
    public function deleteStatique2($id, VoitureRepository $repo, ManagerRegistry $doctrine): Response
    {
        $voiture = $repo->find($id);
        $em = $doctrine->getManager();
        $em->remove($voiture);
        $em->flush();
        return $this->redirectToRoute("app_voitureaffichenonreserve");


    }

    //admin
    #[Route('/updateVoiture/{id}', name: 'updateVoiture')]
    public function updateVoiture(Request $request, ManagerRegistry $doctrine, Voiture $voiture)
    {
        $form = $this->createForm(VoitureFormType::class, $voiture);
        // $form->add('Update',SubmitType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $file = $form->get('picture')->getData();

            if ($file) {
                $uploadsDirectory = $this->getParameter('uploads_directory');
                $imgFilename = $file->getClientOriginalName();
                $file->move($uploadsDirectory, $imgFilename);
                $voiture->setPicture($imgFilename);
            }
            $entityManager = $doctrine->getManager();
            $entityManager->flush();
            return $this->redirectToRoute('app_voitureaffiche', ['id' => $voiture->getId()]);
        }
        return $this->render('voiture/updateV.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    //locateur
    #[Route('/updateVoiture//locateurvoiture/{id}', name: 'updateVoiture2')]
    public function updateVoiture2(Request $request, ManagerRegistry $doctrine, Voiture $voiture)
    {
        $form = $this->createForm(VoitureFormType::class, $voiture);
        // $form->add('Update',SubmitType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $file = $form->get('picture')->getData();

            if ($file) {
                $uploadsDirectory = $this->getParameter('uploads_directory');
                $imgFilename = $file->getClientOriginalName();
                $file->move($uploadsDirectory, $imgFilename);
                $voiture->setPicture($imgFilename);
            }
            $entityManager = $doctrine->getManager();
            $entityManager->flush();
            return $this->redirectToRoute('app_voitureaffichenonreserve', ['id' => $voiture->getId()]);
        }
        return $this->render('voiture/updateV2.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    //locateur
    #[Route('/voiture/add', name: 'addVoiture')]
    public function addVoiture(ManagerRegistry $doctrine, Request $request): Response
    {
        $voiture = new Voiture();
        $form = $this->createForm(VoitureFormType::class, $voiture);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('picture')->getData();


            if ($file) {
                $uploadsDirectory = $this->getParameter('uploads_directory');
                $imgFilename = $file->getClientOriginalName();
                $file->move($uploadsDirectory, $imgFilename);
                $voiture->setPicture($imgFilename);
            }


            $voiture->setEtat("non réservé");
            $em = $doctrine->getManager();
            $em->persist($voiture);
            $em->flush();


            return $this->redirectToRoute('app_voitureaffichenonreserve');
        }

        return $this->render('voiture/addV.html.twig', [
            'form' => $form->createView(),
        ]);
    }

//admin
    #[Route('/voiture/show/{id}', name: 'app_voiture_show', methods: ['GET'])]
    public function show(Voiture $voiture, VoitureRepository $repository, int $id): Response
    {
        // Check if the car information matches the given ID
        if ($voiture->getId() !== $id) {
            throw $this->createNotFoundException();
        }

        // Get car information
        $carInfo = "Brand: " . $voiture->getMarque() . "\n" .
            "Registration Number: " . $voiture->getMatricule() . "\n" .
            "Status: " . $voiture->getEtat() . "\n" .
            "Energy: " . $voiture->getEnergie() . "\n" .
            "Price per day: " . $voiture->getEnergie() . "\n";

        // Generate QR code with car information
        $qrCode = Builder::create()
            ->writer(new PngWriter())
            ->writerOptions([])
            ->data($carInfo)
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
            ->size(300)
            ->margin(10)
            ->roundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->labelText("")
            ->labelFont(new NotoSans(20))
            ->labelAlignment(new LabelAlignmentCenter())
            ->build();

        return $this->render('voiture/show.html.twig', [
            'voiture' => $voiture,
            'qr' => $qrCode->getDataUri(),
        ]);
    }

//locateur
    #[Route('/voiture/locateurvoiture/show/{id}', name: 'app_locateurvoiture_show', methods: ['GET'])]
    public function show2(Voiture $voiture): Response
    {
        return $this->render('voiture/show2.html.twig', [
            'voiture' => $voiture,
        ]);
    }

    //client
    #[Route('/voiture/AffichelistClient', name: 'app_voitureaffichClient')]
    public function AfficherClient(VoitureRepository $repository)
    {
        //$repo=$this->getDoctrine()->getRepository(Voiture::class);
        $voiture = $repository->findBy(['etat' => 'non réservé']);

        return $this->render('voiture/AfficheClient.html.twig',
            ['voiture' => $voiture]);
    }

    #[Route('/voiture/Clientvoiture/show/{id}', name: 'app_Clientvoiture_show', methods: ['GET'])]
    public function show3(Voiture $voiture): Response
    {
        return $this->render('voiture/show3.html.twig', [
            'voiture' => $voiture,
        ]);
    }
}
