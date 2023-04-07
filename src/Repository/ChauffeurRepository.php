<?php

namespace App\Repository;

use App\Entity\Chauffeur;
use App\Entity\Utilisateur;
use App\Entity\Role;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Chauffeur>
 *
 * @method Chauffeur|null find($id_ch, $lockMode = null, $lockVersion = null)
 * @method Chauffeur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Chauffeur[]    findAll()
 * @method Chauffeur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChauffeurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Chauffeur::class);
    }

    public function save(Chauffeur $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Chauffeur $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

   

    public function update(Chauffeur $chauffeur): int
{
    $entityManager = $this->getEntityManager();

    $query = $entityManager->createQuery('
        UPDATE App\Entity\Utilisateur u 
        SET u.cin = :cin, u.nom = :nom, u.prenom = :prenom
        WHERE u.id_user IN (
            SELECT u2.id_user 
            FROM App\Entity\Utilisateur u2 
            JOIN u.roles r 
            JOIN r.chauffeurs ch
            WHERE ch.id_ch = :id_ch AND r.id_role = :id_role AND u.id_user = :id_user
        )
        
    ');
    $query->setParameters([
        'cin' => $chauffeur->getIdRole()->getIdUser()->getCin(),
        'nom' => $chauffeur->getIdRole()->getIdUser()->getNom(),
        'prenom' => $chauffeur->getIdRole()->getIdUser()->getPrenom(),
        'id_ch' => $chauffeur->getIdCh(),
        'id_role' => $chauffeur->getIdRole()->getIdRole(),
        'id_user' => $chauffeur->getIdRole()->getIdUser()->getIdUser()
    ]);

    return $query->execute();
}

}