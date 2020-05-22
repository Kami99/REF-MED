<?php

namespace App\Repository;

use App\Entity\DoctorSocialNetworks;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method DoctorSocialNetworks|null find($id, $lockMode = null, $lockVersion = null)
 * @method DoctorSocialNetworks|null findOneBy(array $criteria, array $orderBy = null)
 * @method DoctorSocialNetworks[]    findAll()
 * @method DoctorSocialNetworks[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DoctorSocialNetworksRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DoctorSocialNetworks::class);
    }

    // /**
    //  * @return DoctorSocialNetworks[] Returns an array of DoctorSocialNetworks objects
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
    public function findOneBySomeField($value): ?DoctorSocialNetworks
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
