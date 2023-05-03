<?php

namespace App\Repository;

use App\Entity\CoVoiturage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Bridge\Google\Transport\GmailSmtpTransport;
use Twilio\Rest\Client;



/**
 * @extends ServiceEntityRepository<CoVoiturage>
 *
 * @method CoVoiturage|null find($id, $lockMode = null, $lockVersion = null)
 * @method CoVoiturage|null findOneBy(array $criteria, array $orderBy = null)
 * @method CoVoiturage[]    findAll()
 * @method CoVoiturage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
interface TransportExceptionInterface extends \Throwable
{
}
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
    public function findAll2()
{
    return $this->createQueryBuilder('e')
        ->getQuery()
        ->getResult();
}

    public function findAllSorted(): array
    {
        $queryBuilder = $this->createQueryBuilder('cl')
            ->orderBy('cl.depart', 'ASC');

        return $queryBuilder->getQuery()->getResult();
    }

    public function findAvailable(): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.nmbr_place > 0')
            ->getQuery()
            ->getResult();
    }

    public function email()
    {

        try {
            $email = (new Email())
                ->from('symfonycopte822@gmail.com')
                ->to('aymen.rahali@esprit.tn')
                ->subject('Car Pool Participation Confirmation')
                ->text('test');

            $transport = new GmailSmtpTransport('symfonycopte822@gmail.com', 'cdwgdrevbdoupxhn');
            $mailer = new Mailer($transport);
            $mailer->send($email);
        } catch (TransportExceptionInterface $e) {
            // Handle any errors that occur during email sending
            $this->addFlash('error', 'An error occurred while sending the email');
        }
    }
    public function send_msg(String $num): void
    {

        $accountSid = 'AC99faaf6c18b526197934d98bd930d0e1';
        $authToken = '0cda48fe6688e201370ebb88918e42b0';
        $client = new Client($accountSid, $authToken);
        $message = $client->messages->create(
            $num, // recipient's phone number
            array(
                'from' => '+16206282479', // your Twilio phone number
                'body' => 'Participation added !'
            )
        );
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
