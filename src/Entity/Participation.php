<?php

namespace App\Entity;

use App\Repository\ParticipationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: ParticipationRepository::class)]
class Participation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "You must complete all empty fields")]
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
}
