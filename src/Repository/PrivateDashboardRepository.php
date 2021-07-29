<?php

namespace App\Repository;

use App\Entity\PrivateDashboard;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PrivateDashboard|null find($id, $lockMode = null, $lockVersion = null)
 * @method PrivateDashboard|null findOneBy(array $criteria, array $orderBy = null)
 * @method PrivateDashboard[]    findAll()
 * @method PrivateDashboard[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PrivateDashboardRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PrivateDashboard::class);
    }

    // /**
    //  * @return PrivateDashboard[] Returns an array of PrivateDashboard objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PrivateDashboard
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
