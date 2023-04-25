<?php

namespace App\Repository;

use App\Entity\CoVoiturage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CoVoiturage>
 *
 * @method CoVoiturage|null find($id, $lockMode = null, $lockVersion = null)
 * @method CoVoiturage|null findOneBy(array $criteria, array $orderBy = null)
 * @method CoVoiturage[]    findAll()
 * @method CoVoiturage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoVoiturageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CoVoiturage::class);
    }

    public function save(CoVoiturage $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CoVoiturage $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function countByLibelle($destination)
    {
        return $this->createQueryBuilder('r')
            ->select('COUNT(r.destination)')
            ->where('r.destination = :destination')
            ->setParameter('destination', $destination)
            ->getQuery()
            ->getSingleScalarResult();
    }
    public function countByLibelle2($depart)
    {
        return $this->createQueryBuilder('r')
            ->select('COUNT(r.depart)')
            ->where('r.depart = :depart')
            ->setParameter('depart', $depart)
            ->getQuery()
            ->getSingleScalarResult();
    }



    public function advancedSearch($query, $id, $depart, $destination, $nmbr_place)
    {
        $qb = $this->createQueryBuilder('c');

        if ($query) {
            $qb->andWhere($qb->expr()->orX(
                $qb->expr()->like('c.id', ':query'),
                $qb->expr()->like('c.depart', ':query'),
                $qb->expr()->like('c.destination', ':query'),
                $qb->expr()->like('c.nmbr_place', ':query'),

            ))
            ->setParameter('query', '%' . $query . '%');
        }

        if ($id) {
            $qb->andWhere('c.id = :id')
                ->setParameter('id', $id);
        }

        if ($depart) {
            $qb->andWhere('c.depart = :depart')
                ->setParameter('depart', $depart);
        }

        if ($destination) {
            $qb->andWhere('c.destination = :destination')
                ->setParameter('destination', $destination);
        }

        if ($nmbr_place) {
            $qb->andWhere('c.nmbr_place = :nmbr_place')
                ->setParameter('nmbr_place', $nmbr_place);
        }

        return $qb->getQuery()->getResult();
    }

    public function findByCoVoiturage(string $query): array
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.depart LIKE :query ')
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('c.id', 'ASC')
            ->getQuery()
            ->getResult();
    }




    //    /**
    //     * @return CoVoiturage[] Returns an array of CoVoiturage objects
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

    //    public function findOneBySomeField($value): ?CoVoiturage
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
