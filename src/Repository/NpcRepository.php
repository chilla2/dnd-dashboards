<?php

namespace App\Repository;

use App\Entity\Npc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Npc|null find($id, $lockMode = null, $lockVersion = null)
 * @method Npc|null findOneBy(array $criteria, array $orderBy = null)
 * @method Npc[]    findAll()
 * @method Npc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NpcRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Npc::class);
    }

    // /**
    //  * @return Npc[] Returns an array of Npc objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Npc
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
