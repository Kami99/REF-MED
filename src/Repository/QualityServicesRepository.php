<?php

namespace App\Repository;

use App\Entity\QualityServices;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method QualityServices|null find($id, $lockMode = null, $lockVersion = null)
 * @method QualityServices|null findOneBy(array $criteria, array $orderBy = null)
 * @method QualityServices[]    findAll()
 * @method QualityServices[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QualityServicesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QualityServices::class);
    }

    // /**
    //  * @return QualityServices[] Returns an array of QualityServices objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?QualityServices
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
