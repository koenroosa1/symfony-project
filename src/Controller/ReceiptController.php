<?php

namespace App\Controller;

use App\Entity\Bestelling;
use App\Entity\MenuItem;
use App\Entity\Reservering;
use App\Repository\BestellingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ReceiptController extends AbstractController
{
    /**
     * @Route("/receipt", name="receipt")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request, BestellingRepository $bestellingRepository)
    {
        $gerechten = array();
        $id = $request->get('id');
        //Reservering ophalen
        $reservering = $this->getDoctrine()
            ->getRepository(Reservering::class)
            ->find($id);
        //Bestellingen ophalen
        $bestelling = $bestellingRepository->findAllReceipt();


        return $this->render('receipt/index.html.twig', [
            'reservering' => $reservering,
            'Bestelling' => $bestelling
        ]);
    }
}
