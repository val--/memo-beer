<?php

namespace App\Repository;

use App\Entity\BeerList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BeerList|null find($id, $lockMode = null, $lockVersion = null)
 * @method BeerList|null findOneBy(array $criteria, array $orderBy = null)
 * @method BeerList[]    findAll()
 * @method BeerList[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BeerListRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BeerList::class);
    }

    // /**
    //  * @return BeerList[] Returns an array of BeerList objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BeerList
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
