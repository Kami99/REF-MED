<?php

namespace App\Repository;

use App\Entity\CategoryDrugs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CategoryDrugs|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategoryDrugs|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategoryDrugs[]    findAll()
 * @method CategoryDrugs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryDrugsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategoryDrugs::class);
    }

    // /**
    //  * @return CategoryDrugs[] Returns an array of CategoryDrugs objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CategoryDrugs
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
