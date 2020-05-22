<?php

namespace App\Repository;

use App\Entity\LaboratorySocialNetworks;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method LaboratorySocialNetworks|null find($id, $lockMode = null, $lockVersion = null)
 * @method LaboratorySocialNetworks|null findOneBy(array $criteria, array $orderBy = null)
 * @method LaboratorySocialNetworks[]    findAll()
 * @method LaboratorySocialNetworks[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LaboratorySocialNetworksRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LaboratorySocialNetworks::class);
    }

    // /**
    //  * @return LaboratorySocialNetworks[] Returns an array of LaboratorySocialNetworks objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LaboratorySocialNetworks
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
