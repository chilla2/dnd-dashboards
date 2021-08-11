<?php

namespace App\Repository;

use App\Entity\PublicDashboard;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PublicDashboard|null find($id, $lockMode = null, $lockVersion = null)
 * @method PublicDashboard|null findOneBy(array $criteria, array $orderBy = null)
 * @method PublicDashboard[]    findAll()
 * @method PublicDashboard[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PublicDashboardRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PublicDashboard::class);
    }

    // /**
    //  * @return PublicDashboard[] Returns an array of PublicDashboard objects
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
    public function findOneBySomeField($value): ?PublicDashboard
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
