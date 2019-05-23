<?php

namespace App\Controller;

use App\Entity\Bestelling;
use App\Entity\MenuItem;
use App\Form\BestellingType;
use App\Repository\BestellingRepository;
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


}
