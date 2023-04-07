<?php

namespace App\Repository;

use App\Entity\Client;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Client>
 *
 * @method Client|null find($id_client, $lockMode = null, $lockVersion = null)
 * @method Client|null findOneBy(array $criteria, array $orderBy = null)
 * @method Client[]    findAll()
 * @method Client[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Client::class);
    }

    public function save(Client $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Client $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }


    public function update(Client $client): int
    {
        $entityManager = $this->getEntityManager();
    
        $query = $entityManager->createQuery('
            UPDATE App\Entity\Utilisateur u 
            SET u.cin = :cin, u.nom = :nom, u.prenom = :prenom
            WHERE u.id_user IN (
                SELECT u2.id_user 
                FROM App\Entity\Utilisateur u2 
                JOIN u.roles r 
                JOIN r.clients ch
                WHERE ch.id_ch = :id_ch AND r.id_role = :id_role AND u.id_user = :id_user
            )
            
        ');
        $query->setParameters([
            'cin' => $client->getIdRole()->getIdUser()->getCin(),
            'nom' => $client->getIdRole()->getIdUser()->getNom(),
            'prenom' => $client->getIdRole()->getIdUser()->getPrenom(),
            'id_ch' => $client->getIdCh(),
            'id_role' => $client->getIdRole()->getIdRole(),
            'id_user' => $client->getIdRole()->getIdUser()->getIdUser()
        ]);
    
        return $query->execute();
    }
}