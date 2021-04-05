<?php

namespace App\Repository;

use App\Entity\BeerListItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BeerListItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method BeerListItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method BeerListItem[]    findAll()
 * @method BeerListItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BeerListItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BeerListItem::class);
    }

    // /**
    //  * @return BeerListItem[] Returns an array of BeerListItem objects
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
    public function findOneBySomeField($value): ?BeerListItem
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
