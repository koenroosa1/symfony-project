<?php

namespace App\Repository;

use App\Entity\Bestelling;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Bestelling|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bestelling|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bestelling[]    findAll()
 * @method Bestelling[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BestellingRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Bestelling::class);
    }

    // /**
    //  * @return Bestelling[] Returns an array of Bestelling objects
    //  */

    public function findAllGrouped()
    {
        return $this->createQueryBuilder('b')
            ->innerJoin('b.MenuItemcode', 'a')
            ->select('a.MenuItem', 'b.Aantal', 'b.Datum', 'a.MenuItemcode')
            ->orderBy('b.Tijd', 'ASC')
            ->orderBy('b.Tafel')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findAllReceipt($tafel)
    {
        return $this->createQueryBuilder('b')
            ->innerJoin('b.MenuItemcode', 'a')
            ->select('a.MenuItem', 'b.Aantal', 'b.Tafel', 'b.Prijs', 'b.Datum', 'b.Tijd')
            ->where('b.Tafel = :tafel')
            ->setParameter('tafel', $tafel)
            ->orderBy('b.Tijd', 'ASC')
            ->orderBy('b.Tafel')
            ->getQuery()
            ->getResult()
            ;
    }

}
