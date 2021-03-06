<?php

namespace App\Repository;

use App\Entity\PackageCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PackageCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method PackageCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method PackageCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PackageCategoryRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PackageCategory::class);
    }

    public function findAll()
    {
        $builder = $this->createQueryBuilder('p');
        $builder->orderBy('p.parent', 'DESC');
        return $builder->getQuery()->getResult();
    }


//    /**
//     * @return PackageCategory[] Returns an array of PackageCategory objects
//     */
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
    public function findOneBySomeField($value): ?PackageCategory
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
