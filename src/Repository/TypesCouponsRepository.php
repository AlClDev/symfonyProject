<?php

namespace App\Repository;

use App\Entity\TypesCoupons;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TypesCoupons>
 *
 * @method TypesCoupons|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypesCoupons|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypesCoupons[]    findAll()
 * @method TypesCoupons[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypesCouponsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypesCoupons::class);
    }

//    /**
//     * @return TypesCoupons[] Returns an array of TypesCoupons objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TypesCoupons
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
