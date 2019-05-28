<?php

namespace App\Controller;

use App\Entity\Bestelling;
use App\Entity\MenuItem;
use App\Form\BestellingType;
use App\Repository\BestellingRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/overzicht_kok")
 */
class OverzichtKokController extends AbstractController
{
    /**
     * @Route("/", name="bestelling_index", methods={"GET"})
     * @param BestellingRepository $bestellingRepository
     * @return Response
     */
    public function index(BestellingRepository $bestellingRepository): Response
    {
        return $this->render('overzicht_kok/index.html.twig', [
            'bestellings' => $bestellingRepository->findAllGrouped()
        ]);
    }

    /**
     * @Route("/add", name="bestelling_add")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function add(Request $request, BestellingRepository $bestellingRepository, EntityManagerInterface $em)
    {
        $id = $request->get('id');
        $bestellingRepository->updateBestelling($id);

        return $this->redirect('/overzicht_kok');
    }

    /**
     * @param BestellingRepository $bestellingRepository
     * @return Response
     * @Route("/ober")
     */
    public function barman(BestellingRepository $bestellingRepository)
    {
        return $this->render('overzicht_kok/barman.html.twig', [
            'bestellings' => $bestellingRepository->findAllGrouped()
        ]);
    }


}
