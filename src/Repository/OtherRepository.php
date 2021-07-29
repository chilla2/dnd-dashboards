<?php

namespace App\Repository;

use App\Entity\Other;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Other|null find($id, $lockMode = null, $lockVersion = null)
 * @method Other|null findOneBy(array $criteria, array $orderBy = null)
 * @method Other[]    findAll()
 * @method Other[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OtherRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Other::class);
    }

    // /**
    //  * @return Other[] Returns an array of Other objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Other
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
