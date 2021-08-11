<?php

namespace App\Repository;

use App\Entity\Dash;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Dash|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dash|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dash[]    findAll()
 * @method Dash[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DashRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dash::class);
    }

    // /**
    //  * @return Dash[] Returns an array of Dash objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Dash
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
