<?php

namespace App\Entity;

use App\Repository\ParticipationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use Twilio\Rest\Client;


#[ORM\Entity(repositoryClass: ParticipationRepository::class)]
class Participation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    /**
     * @Assert\NotNull(message="The number of seats field is required.")
     */
    private ?int $nmbr_place_part = null;

    #[ORM\Column(nullable: true)]

    private ?int $id_user = null;

    #[ORM\ManyToOne(inversedBy: 'participations')]
    private ?CoVoiturage $id_co = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNmbrPlacePart(): ?int
    {
        return $this->nmbr_place_part;
    }

    public function setNmbrPlacePart(int $nmbr_place_part): self
    {
        $this->nmbr_place_part = $nmbr_place_part;

        return $this;
    }


    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function setIdUser(?int $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getIdCo(): ?CoVoiturage
    {
        return $this->id_co;
    }

    public function setIdCo(?CoVoiturage $id_co): self
    {
        $this->id_co = $id_co;

        return $this;
    }

    public function send_msg(String $num): void
    {

        $accountSid ='AC1ed373981440ff3b6ccefc4eb68223b7';
        $authToken = '0d8dc3f99ee3ae809e32d57b9b4ef3b7';
        $client = new Client($accountSid, $authToken);
        $message = $client->messages->create(
            $num, // recipient's phone number
            array(
                'from' => '+12766226509', // your Twilio phone number
                'body' => 'Participation added !'
            )
        );
    }
}
