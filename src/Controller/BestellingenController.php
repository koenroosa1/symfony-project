<?php

namespace App\Controller;

use App\Entity\Bestelling;
use App\Entity\MenuItem;
use App\Entity\Reservering;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
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
        $menuItem1Sub1 = array();
        $menuItem1Sub2 = array();
        $menuItem2Sub1 = array();
        $menuItem2Sub2 = array();
        $menuItem2Sub3 = array();
        $menuItem3Sub1 = array();
        $menuItem3Sub2 = array();
        $menuItem4 = array();
        $menuItem5 = array();
        $menuItem6 = array();
        $menuItem7 = array();
        $menuItem8 = array();
        $menuItem9 = array();

        $id = $request->get('id');
        //Reservering ophalen
        $reservering = $this->getDoctrine()
            ->getRepository(Reservering::class)
            ->find($id);
        //Menu items ophalen
        $menuItem = $this->getDoctrine()
            ->getRepository(MenuItem::class)
            ->findAll();
        //Foreach door alle menu items
        foreach ($menuItem as $item){
            switch ($item->getMenuItemcode()){
                case '1':
                    if ($item->getSubgerechtCode() == '1'){
                        array_push($menuItem1Sub1, $item);
                    }
                    elseif ($item->getSubgerechtCode() == '2'){
                        array_push($menuItem1Sub2, $item);
                    }
                    break;
                case '2':
                    if ($item->getSubgerechtCode() == '1'){
                        array_push($menuItem2Sub1, $item);
                    }
                    elseif ($item->getSubgerechtCode() == '2'){
                        array_push($menuItem2Sub2, $item);
                    }
                    elseif ($item->getSubgerechtCode() == '3'){
                        array_push($menuItem2Sub3, $item);
                    }
                    break;
                case '3':
                    if ($item->getSubgerechtCode() == '1'){
                        array_push($menuItem3Sub1, $item);
                    }
                    elseif ($item->getSubgerechtCode() == '2'){
                        array_push($menuItem3Sub2, $item);
                    }
                    break;
                case '4':
                    array_push($menuItem4, $item);
                    break;
                case '5':
                    array_push($menuItem5, $item);
                    break;
                case '6':
                    array_push($menuItem6, $item);
                    break;
                case '7':
                    array_push($menuItem7, $item);
                    break;
                case '8':
                    array_push($menuItem8, $item);
                    break;
                case '9':
                    array_push($menuItem9, $item);
                    break;
                default:
                    $error = 'Er is geen gerecht gevonden met de desbetreffende code...';
                    break;

            }
        }

        //Return staement
        return $this->render('bestellingen/index.html.twig', [
            'Reservering' => $reservering,
            'menuItem1sub1' => $menuItem1Sub1,
            'MenuItem1sub2' => $menuItem1Sub2,
            'MenuItem2sub1' => $menuItem2Sub1,
            'MenuItem2sub2' => $menuItem2Sub2,
            'MenuItem2sub3' => $menuItem2Sub3,
            'MenuItem3sub1' => $menuItem3Sub1,
            'MenuItem3sub2' => $menuItem3Sub2,
            'MenuItem4' => $menuItem4,
            'MenuItem5' => $menuItem5,
            'MenuItem6' => $menuItem6,
            'MenuItem7' => $menuItem7,
            'MenuItem8' => $menuItem8,
            'MenuItem9' => $menuItem9,
        ]);
    }

    /**
     * @Route("/bestellingen/confirm", name="bestellingen_confirm")
     * @param Request $request
     * @param EntityManager $em
     * @return Response
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function confirm(Request $request, EntityManagerInterface $em)
    {
        $id = $request->get('id');
        //Reservering ophalen
        $reservering = $this->getDoctrine()
            ->getRepository(Reservering::class)
            ->find($id);

        if ($request->isMethod('post')){
            foreach ($_POST as $key => $val){
                $menuItemCodeId = $this->getDoctrine()
                    ->getRepository(MenuItem::class)
                    ->findBy(
                        array('MenuItem' => $key)
                    );
                $bestelling = new Bestelling();
                $bestelling->setAantal($val);
                foreach ($menuItemCodeId as $menuItem){
                    $bestelling->setMenuItemcode($menuItem);
                    $bestelling->setPrijs($menuItem->getPrijs() * $val);
                }
                $bestelling->setTafel($reservering->getTafel());
                $bestelling->setDatum(date('Y-m-d'));
                $bestelling->setTijd(time());
                try {
                    $em->persist($bestelling);
                } catch (ORMException $e) {
                    throw new \Exception($e);
                }
            }
            try {
                $em->flush();
            } catch (OptimisticLockException $e) {
                throw new OptimisticLockException($e, $bestelling);
            } catch (ORMException $e) {
                throw new ORMException($e);
            }
        }

        $cookies = $request->cookies->all();
        return $this->render('bestellingen/confirm.html.twig', [
            'data' => $cookies
        ]);

    }

}
