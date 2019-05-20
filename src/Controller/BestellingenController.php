<?php

namespace App\Controller;

use App\Entity\Reservering;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BestellingenController extends AbstractController
{
    /**
     * @Route("/bestellingen", name="bestellingen")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $id = $request->get('id');
        $reservering = $this->getDoctrine()
            ->getRepository(Reservering::class)
            ->find($id);

        return $this->render('bestellingen/index.html.twig', [
            'Reservering' => $reservering,
        ]);
    }
}
