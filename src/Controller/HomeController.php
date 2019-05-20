<?php

namespace App\Controller;

use App\Entity\Reservering;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $tafels = $this->getDoctrine()
            ->getRepository(Reservering::class)
            ->findAll();
        return $this->render('home/index.html.twig', [
            'Tafels' => $tafels
        ]);
    }
}
