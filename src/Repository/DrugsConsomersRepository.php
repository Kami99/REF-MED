<?php

namespace App\Repository;

use App\Entity\DrugsConsomers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method DrugsConsomers|null find($id, $lockMode = null, $lockVersion = null)
 * @method DrugsConsomers|null findOneBy(array $criteria, array $orderBy = null)
 * @method DrugsConsomers[]    findAll()
 * @method DrugsConsomers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DrugsConsomersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DrugsConsomers::class);
    }

    // /**
    //  * @return DrugsConsomers[] Returns an array of DrugsConsomers objects
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
    public function findOneBySomeField($value): ?DrugsConsomers
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
