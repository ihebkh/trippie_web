<?php

namespace App\Entity;

use App\Repository\CoVoiturageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoVoiturageRepository::class)]
class CoVoiturage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $depart = null;

    #[ORM\Column(length: 50)]
    private ?string $destination = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_dep = null;

    #[ORM\Column]
    private ?int $nmbr_place = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cov_img = null;

    #[ORM\Column(nullable: true)]
    private ?int $id_chauff = null;

    #[ORM\OneToMany(mappedBy: 'id_co', targetEntity: Participation::class)]
    private Collection $participations;

    public function __construct()
    {
        $this->participations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDepart(): ?string
    {
        return $this->depart;
    }

    public function setDepart(string $depart): self
    {
        $this->depart = $depart;

        return $this;
    }

    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    public function getDateDep(): ?\DateTimeInterface
    {
        return $this->date_dep;
    }

    public function setDateDep(\DateTimeInterface $date_dep): self
    {
        $this->date_dep = $date_dep;

        return $this;
    }

    public function getNmbrPlace(): ?int
    {
        return $this->nmbr_place;
    }

    public function setNmbrPlace(int $nmbr_place): self
    {
        $this->nmbr_place = $nmbr_place;

        return $this;
    }

    public function getCovImg(): ?string
    {
        return $this->cov_img;
    }

    public function setCovImg(?string $cov_img): self
    {
        $this->cov_img = $cov_img;

        return $this;
    }

    public function getIdChauff(): ?int
    {
        return $this->id_chauff;
    }

    public function setIdChauff(?int $id_chauff): self
    {
        $this->id_chauff = $id_chauff;

        return $this;
    }

    public function toString(): string
    {
        return "VoitureRepository Object";
    }

    /**
     * @return Collection<int, Participation>
     */
    public function getParticipations(): Collection
    {
        return $this->participations;
    }

    public function addParticipation(Participation $participation): self
    {
        if (!$this->participations->contains($participation)) {
            $this->participations->add($participation);
            $participation->setIdCo($this);
        }

        return $this;
    }

    public function removeParticipation(Participation $participation): self
    {
        if ($this->participations->removeElement($participation)) {
            // set the owning side to null (unless already changed)
            if ($participation->getIdCo() === $this) {
                $participation->setIdCo(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->id;
    }
}
