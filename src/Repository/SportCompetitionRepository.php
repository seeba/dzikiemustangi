<?php

namespace App\Repository;

use App\Entity\SportCompetition;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SportCompetition|null find($id, $lockMode = null, $lockVersion = null)
 * @method SportCompetition|null findOneBy(array $criteria, array $orderBy = null)
 * @method SportCompetition[]    findAll()
 * @method SportCompetition[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SportCompetitionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SportCompetition::class);
    }

    // /**
    //  * @return SportCompetition[] Returns an array of SportCompetition objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SportCompetition
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
