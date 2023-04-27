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
use Knp\Component\Pager\PaginatorInterface;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
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
    public function Affiche(VoitureRepository $repository, Request $request)
    {
        $voiture = $repository->findall();

        return $this->render('voiture/Affiche.html.twig', [
            'voiture' => $voiture,
        ]);
    }

//locateur
    #[Route('/voiture/Affichelocateur', name: 'app_voitureaffichenonreserve')]
    public function Affichernoneserve(VoitureRepository $repository, PaginatorInterface $paginator, Request $request)
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


    // stat
    #[Route('/dashboard/stat', name: 'stat', methods: ['POST','GET'])]
    public function VoitureStatistics( VoitureRepository $repo): Response
    {
        $total = $repo->countByLibelle('BMW') +
            $repo->countByLibelle('Mercedes') +
            $repo->countByLibelle('Audi') +
            $repo->countByLibelle('clio') +
            $repo->countByLibelle('porshe') +
            $repo->countByLibelle('peugeot') +
            $repo->countByLibelle('hamer');

        $BMWCount = $repo->countByLibelle('BMW');
        $MercedesCount = $repo->countByLibelle('Mercedes');
        $AudiCount = $repo->countByLibelle('Audi');
        $clioCount= $repo->countByLibelle('clio');
        $porsheCount = $repo->countByLibelle('porshe');
        $peugeotCount = $repo->countByLibelle('peugeot');
        $hamerCount = $repo->countByLibelle('hamer');


        $BmwPercentage = round(($BMWCount / $total) * 100);
        $MercedesPercentage = round(($MercedesCount / $total) * 100);
        $AudiPercentage = round(($AudiCount / $total) * 100);
        $clioPercentage = round(($clioCount/ $total) * 100);
        $porshePercentage = round(($porsheCount / $total) * 100);
        $peugeotPercentage = round(($peugeotCount / $total) * 100);
        $hamerPercentage = round(($hamerCount / $total) * 100);

        return $this->render('voiture/stat.html.twig', [
            'BMWPercentage' => $BmwPercentage,
            'MercedesPercentage' => $MercedesPercentage,
            'AudiPercentage' => $AudiPercentage,
            'clioPercentage' => $clioPercentage,
            'porshePercentage' => $porshePercentage,
            'peugeotPercentage' => $peugeotPercentage,
            'hamerPercentage' => $hamerPercentage,

        ]);
    }
    #[Route('/dashboard/stat2', name: 'stat2', methods: ['POST','GET'])]
    public function VoitureStatistics2( VoitureRepository $repo): Response
    {
        $total = $repo->countByLibelle('BMW') +
            $repo->countByLibelle('Mercedes') +
            $repo->countByLibelle('Audi') +
            $repo->countByLibelle('clio') +
            $repo->countByLibelle('porshe') +
            $repo->countByLibelle('peugeot') +
            $repo->countByLibelle('hamer');

        $BMWCount = $repo->countByLibelle('BMW');
        $MercedesCount = $repo->countByLibelle('Mercedes');
        $AudiCount = $repo->countByLibelle('Audi');
        $clioCount= $repo->countByLibelle('clio');
        $porsheCount = $repo->countByLibelle('porshe');
        $peugeotCount = $repo->countByLibelle('peugeot');
        $hamerCount = $repo->countByLibelle('hamer');


        $BmwPercentage = round(($BMWCount / $total) * 100);
        $MercedesPercentage = round(($MercedesCount / $total) * 100);
        $AudiPercentage = round(($AudiCount / $total) * 100);
        $clioPercentage = round(($clioCount/ $total) * 100);
        $porshePercentage = round(($porsheCount / $total) * 100);
        $peugeotPercentage = round(($peugeotCount / $total) * 100);
        $hamerPercentage = round(($hamerCount / $total) * 100);

        return $this->render('voiture/stat2.html.twig', [
            'BMWPercentage' => $BmwPercentage,
            'MercedesPercentage' => $MercedesPercentage,
            'AudiPercentage' => $AudiPercentage,
            'clioPercentage' => $clioPercentage,
            'porshePercentage' => $porshePercentage,
            'peugeotPercentage' => $peugeotPercentage,
            'hamerPercentage' => $hamerPercentage,

        ]);
    }

    #[Route('/voiture/search', name: 'search2', methods: ['GET', 'POST'])]
    public function search2(Request $request, VoitureRepository $repo): Response
    {
        $query = $request->query->get('query');
        $id = $request->query->get('id');
        $marque = $request->query->get('marque');
        $matricule = $request->query->get('matricule');

        $voiture = $repo->advancedSearch($query, $id, $marque, $matricule);

        return $this->render('voiture/Affiche.html.twig', [
            'voiture' => $voiture,
        ]);
    }

    #[Route('/voiture/tricroi', name: 'tri', methods: ['GET','POST'])]
    public function triCroissant( VoitureRepository $VoitureRepository): Response
    {
        $voiture = $VoitureRepository->findAllSorted();

        return $this->render('voiture/Affiche.html.twig', [
            'voiture' => $voiture,
        ]);
    }


}
