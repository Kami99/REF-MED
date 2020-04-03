<?php

namespace App\Repository;

use App\Entity\FormDrugs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FormDrugs|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormDrugs|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormDrugs[]    findAll()
 * @method FormDrugs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormDrugsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormDrugs::class);
    }

    // /**
    //  * @return FormDrugs[] Returns an array of FormDrugs objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FormDrugs
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
