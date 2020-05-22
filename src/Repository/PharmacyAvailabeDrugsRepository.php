<?php

namespace App\Repository;

use App\Entity\PharmacyAvailabeDrugs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PharmacyAvailabeDrugs|null find($id, $lockMode = null, $lockVersion = null)
 * @method PharmacyAvailabeDrugs|null findOneBy(array $criteria, array $orderBy = null)
 * @method PharmacyAvailabeDrugs[]    findAll()
 * @method PharmacyAvailabeDrugs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PharmacyAvailabeDrugsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PharmacyAvailabeDrugs::class);
    }

    // /**
    //  * @return PharmacyAvailabeDrugs[] Returns an array of PharmacyAvailabeDrugs objects
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
    public function findOneBySomeField($value): ?PharmacyAvailabeDrugs
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
