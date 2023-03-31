<?php

namespace App\Repository;

use App\Entity\Locateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Locateur>
 *
 * @method Locateur|null find($id_locateur, $lockMode = null, $lockVersion = null)
 * @method Locateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Locateur[]    findAll()
 * @method Locateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LocateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Locateur::class);
    }

    public function save(Locateur $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Locateur $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}