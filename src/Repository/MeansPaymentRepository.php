<?php

namespace App\Repository;

use App\Entity\MeansPayment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MeansPayment|null find($id, $lockMode = null, $lockVersion = null)
 * @method MeansPayment|null findOneBy(array $criteria, array $orderBy = null)
 * @method MeansPayment[]    findAll()
 * @method MeansPayment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MeansPaymentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MeansPayment::class);
    }

    // /**
    //  * @return MeansPayment[] Returns an array of MeansPayment objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MeansPayment
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
