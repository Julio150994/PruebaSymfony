<?php

namespace App\Repository;

use App\Entity\EmpresasRepartos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EmpresasRepartos>
 *
 * @method EmpresasRepartos|null find($id, $lockMode = null, $lockVersion = null)
 * @method EmpresasRepartos|null findOneBy(array $criteria, array $orderBy = null)
 * @method EmpresasRepartos[]    findAll()
 * @method EmpresasRepartos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmpresasRepartosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EmpresasRepartos::class);
    }

    public function save(EmpresasRepartos $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EmpresasRepartos $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return EmpresasRepartos[] Returns an array of EmpresasRepartos objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?EmpresasRepartos
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
