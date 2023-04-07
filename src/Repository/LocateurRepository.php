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

    public function update(Locateur $locateur): int
    {
        $entityManager = $this->getEntityManager();
    
        $query = $entityManager->createQuery('
            UPDATE App\Entity\Utilisateur u 
            SET u.cin = :cin, u.nom = :nom, u.prenom = :prenom
            WHERE u.id_user IN (
                SELECT u2.id_user 
                FROM App\Entity\Utilisateur u2 
                JOIN u.roles r 
                JOIN r.locateurs ch
                WHERE ch.id_ch = :id_ch AND r.id_role = :id_role AND u.id_user = :id_user
            )
            
        ');
        $query->setParameters([
            'cin' => $locateur->getIdRole()->getIdUser()->getCin(),
            'nom' => $locateur->getIdRole()->getIdUser()->getNom(),
            'prenom' => $locateur->getIdRole()->getIdUser()->getPrenom(),
            'id_ch' => $locateur->getIdCh(),
            'id_role' => $locateur->getIdRole()->getIdRole(),
            'id_user' => $locateur->getIdRole()->getIdUser()->getIdUser()
        ]);
    
        return $query->execute();
    }
}