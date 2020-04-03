<?php

namespace App\Repository;

use App\Entity\PraticalInfos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PraticalInfos|null find($id, $lockMode = null, $lockVersion = null)
 * @method PraticalInfos|null findOneBy(array $criteria, array $orderBy = null)
 * @method PraticalInfos[]    findAll()
 * @method PraticalInfos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PraticalInfosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PraticalInfos::class);
    }

    // /**
    //  * @return PraticalInfos[] Returns an array of PraticalInfos objects
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
    public function findOneBySomeField($value): ?PraticalInfos
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
