<?php

namespace App\Repository;

use App\Entity\PharmacySocialNetworks;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PharmacySocialNetworks|null find($id, $lockMode = null, $lockVersion = null)
 * @method PharmacySocialNetworks|null findOneBy(array $criteria, array $orderBy = null)
 * @method PharmacySocialNetworks[]    findAll()
 * @method PharmacySocialNetworks[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PharmacySocialNetworksRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PharmacySocialNetworks::class);
    }

    // /**
    //  * @return PharmacySocialNetworks[] Returns an array of PharmacySocialNetworks objects
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
    public function findOneBySomeField($value): ?PharmacySocialNetworks
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
