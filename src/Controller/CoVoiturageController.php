<?php

namespace App\Controller;

use App\Entity\CoVoiturage;
use App\Form\CoVoiturageType;
use App\Repository\CoVoiturageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;


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
                // $coVoiturage->send_msg('+21692554097');
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
                $coVoiturage->send_msg('+21692554097');
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

    #[Route('index/client/{id}/edit', name: 'app_co_voiturage_edit_front', methods: ['GET', 'POST'])]
    public function editfront(Request $request, CoVoiturage $coVoiturage, CoVoiturageRepository $coVoiturageRepository): Response
    {
        $form = $this->createForm(CoVoiturageType::class, $coVoiturage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $coVoiturageRepository->save($coVoiturage, true);

            return $this->redirectToRoute('app_co_voiturage_index_fornt', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('co_voiturage/editfront.html.twig', [
            'co_voiturage' => $coVoiturage,
            'form' => $form,
        ]);
    }
    #[Route('/{id}', name: 'app_co_voiturage_delete', methods: ['POST'])]
    public function delete(Request $request, CoVoiturage $coVoiturage, CoVoiturageRepository $coVoiturageRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $coVoiturage->getId(), $request->request->get('_token'))) {
            $coVoiturageRepository->remove($coVoiturage, true);
        }

        return $this->redirectToRoute('app_co_voiturage_index', [], Response::HTTP_SEE_OTHER);
    }
    //chauffeur 
    #[Route('/chauffeur/{id}', name: 'app_co_voiturage_delete2', methods: ['POST'])]
    public function deleteFront(Request $request, CoVoiturage $coVoiturage, CoVoiturageRepository $coVoiturageRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $coVoiturage->getId(), $request->request->get('_token'))) {
            $coVoiturageRepository->remove($coVoiturage, true);
        }

        return $this->redirectToRoute('app_co_voiturage_index_fornt', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/dashboard/stat', name: 'stat', methods: ['POST', 'GET'])]
    public function VoitureStatistics(CoVoiturageRepository $repo): Response
    {
        $total = $repo->countByLibelle('Aryanah') +
            $repo->countByLibelle('Bizerte') +
            $repo->countByLibelle('Beja') +
            $repo->countByLibelle('Tunis') +
            $repo->countByLibelle('Sfax') +
            $repo->countByLibelle('Kairouan') +
            $repo->countByLibelle('Jandouba') +
            $repo->countByLibelle('Ben Arous') +
            $repo->countByLibelle('Manouba') +
            $repo->countByLibelle('Gabes') +
            $repo->countByLibelle('Nabeul') +
            $repo->countByLibelle('Zaghouan');

        $AryanahCount = $repo->countByLibelle('Aryanah');
        $BizerteCount = $repo->countByLibelle('Bizerte');
        $BejaCount = $repo->countByLibelle('Beja');
        $TunisCount = $repo->countByLibelle('Tunis');
        $SfaxCount = $repo->countByLibelle('Sfax');
        $KairouanCount = $repo->countByLibelle('Kairouan');
        $JandoubaCount = $repo->countByLibelle('Jandouba');
        $Ben_ArousCount = $repo->countByLibelle('Ben Arous');
        $ManoubaCount = $repo->countByLibelle('Manouba');
        $NabeulCount = $repo->countByLibelle('Nabeul');
        $ZaghouanCount = $repo->countByLibelle('Zaghouan');
        $GabesCount = $repo->countByLibelle('Gabes');

        $AryanahPercentage = round(($AryanahCount / $total) * 100);
        $BizertePercentage = round(($BizerteCount / $total) * 100);
        $BejaPercentage = round(($BejaCount / $total) * 100);
        $TunisPercentage = round(($TunisCount / $total) * 100);
        $SfaxPercentage = round(($SfaxCount / $total) * 100);
        $KairouanPercentage = round(($KairouanCount / $total) * 100);
        $JandoubaPercentage = round(($JandoubaCount / $total) * 100);
        $Ben_ArousPercentage = round(($Ben_ArousCount / $total) * 100);
        $ManoubaPercentage = round(($ManoubaCount / $total) * 100);
        $NabeulPercentage = round(($NabeulCount / $total) * 100);
        $ZaghouanPercentage = round(($ZaghouanCount / $total) * 100);
        $GabesPercentage = round(($GabesCount / $total) * 100);




        $total = $repo->countByLibelle2('Aryanah') +
            $repo->countByLibelle2('Bizerte') +
            $repo->countByLibelle2('Beja') +
            $repo->countByLibelle2('Tunis') +
            $repo->countByLibelle2('Sfax') +
            $repo->countByLibelle2('Kairouan') +
            $repo->countByLibelle2('Jandouba') +
            $repo->countByLibelle2('Ben Arous') +
            $repo->countByLibelle2('Manouba') +
            $repo->countByLibelle2('Gabes') +
            $repo->countByLibelle2('Nabeul') +
            $repo->countByLibelle2('Zaghouan');

        $AryanahCount2 = $repo->countByLibelle2('Aryanah');
        $BizerteCount2 = $repo->countByLibelle2('Bizerte');
        $BejaCount2 = $repo->countByLibelle2('Beja');
        $TunisCount2 = $repo->countByLibelle2('Tunis');
        $SfaxCount2 = $repo->countByLibelle2('Sfax');
        $KairouanCount2 = $repo->countByLibelle2('Kairouan');
        $JandoubaCount2 = $repo->countByLibelle2('Jandouba');
        $Ben_ArousCount2 = $repo->countByLibelle2('Ben Arous');
        $ManoubaCount2 = $repo->countByLibelle2('Manouba');
        $NabeulCount2 = $repo->countByLibelle2('Nabeul');
        $ZaghouanCount2 = $repo->countByLibelle2('Zaghouan');
        $GabesCount2 = $repo->countByLibelle2('Gabes');

        $AryanahPercentage2 = round(($AryanahCount2 / $total) * 100);
        $BizertePercentage2 = round(($BizerteCount2 / $total) * 100);
        $BejaPercentage2 = round(($BejaCount2 / $total) * 100);
        $TunisPercentage2 = round(($TunisCount2 / $total) * 100);
        $SfaxPercentage2 = round(($SfaxCount2 / $total) * 100);
        $KairouanPercentage2 = round(($KairouanCount2 / $total) * 100);
        $JandoubaPercentage2 = round(($JandoubaCount2 / $total) * 100);
        $Ben_ArousPercentage2 = round(($Ben_ArousCount2 / $total) * 100);
        $ManoubaPercentage2 = round(($ManoubaCount2 / $total) * 100);
        $NabeulPercentage2 = round(($NabeulCount2 / $total) * 100);
        $ZaghouanPercentage2 = round(($ZaghouanCount2 / $total) * 100);
        $GabesPercentage2 = round(($GabesCount2 / $total) * 100);

        return $this->render('co_voiturage/stat.html.twig', [
            'AryanahPercentage' => $AryanahPercentage,
            'BizertePercentage' => $BizertePercentage,
            'BejaPercentage' => $BejaPercentage,
            'TunisPercentage' => $TunisPercentage,
            'SfaxPercentage' => $SfaxPercentage,
            'KairouanPercentage' => $KairouanPercentage,
            'JandoubaPercentage' => $JandoubaPercentage,
            'Ben_ArousPercentage' => $Ben_ArousPercentage,
            'ManoubaPercentage' => $ManoubaPercentage,
            'NabeulPercentage' => $NabeulPercentage,
            'ZaghouanPercentage' => $ZaghouanPercentage,
            'GabesPercentage' => $GabesPercentage,
            'AryanahPercentage2' => $AryanahPercentage2,
            'BizertePercentage2' => $BizertePercentage2,
            'BejaPercentage2' => $BejaPercentage2,
            'TunisPercentage2' => $TunisPercentage2,
            'SfaxPercentage2' => $SfaxPercentage2,
            'KairouanPercentage2' => $KairouanPercentage2,
            'JandoubaPercentage2' => $JandoubaPercentage2,
            'Ben_ArousPercentage2' => $Ben_ArousPercentage2,
            'ManoubaPercentage2' => $ManoubaPercentage2,
            'NabeulPercentage2' => $NabeulPercentage2,
            'ZaghouanPercentage2' => $ZaghouanPercentage2,
            'GabesPercentage2' => $GabesPercentage2,

        ]);
    }



    #[Route('/co/voiturage/search', name: 'search2', methods: ['GET', 'POST'])]
    public function search2(Request $request, CoVoiturageRepository $repo): Response
    {
        $query = $request->query->get('query');
        $id = $request->query->get('id');
        $depart = $request->query->get('depart');
        $destination = $request->query->get('destination');
        $nmbr_place = $request->query->get('nmbr_place');

        $coVoiturage = $repo->advancedSearch($query, $id, $depart, $destination, $nmbr_place);

        return $this->render('co_voiturage/index.html.twig', [
            'co_voiturages' => $coVoiturage,
        ]);
    }
}
