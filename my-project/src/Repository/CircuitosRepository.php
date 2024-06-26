<?php

namespace App\Repository;

use App\Entity\Circuitos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Circuitos>
 *
 * @method Circuitos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Circuitos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Circuitos[]    findAll()
 * @method Circuitos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CircuitosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Circuitos::class);
    }

//    /**
//     * @return Circuitos[] Returns an array of Circuitos objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Circuitos
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
