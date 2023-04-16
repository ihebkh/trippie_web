<?php

namespace App\Entity;

use App\Repository\VoitureRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Reservation;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: VoitureRepository::class)]
class Voiture
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;


    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Registration Number is empty")]
    private ?string $matricule = null;

    #[Assert\NotBlank(message: "Brand Number is empty")]
    #[ORM\Column(length: 255)]
    private ?string $marque = null;
    #[Assert\NotBlank(message: "power Number is empty")]
    #[ORM\Column(length: 255)]
    private ?string $puissance = null;
    #[Assert\NotBlank(message: "price Number is empty")]
    #[Assert\NotBlank(message: "price Number must be positve")]
    #[Assert\Range(
        min: 1,
        max: 9999999999,
        notInRangeMessage: "price per day must be positve"
    )]
    #[ORM\Column(length: 255)]
    private ?string $prixJours = null;

    #[ORM\Column(length: 255)]
    private ?string $picture = null;
    #[Assert\NotBlank(message: "Energy is empty")]
    #[ORM\Column(length: 255)]
    private ?string $energie = null;

    #[ORM\Column(length: 255)]
    private ?string $etat = null;

    #[ORM\Column]
    private ?int $idLocateur = null;
    #[ORM\OneToMany(mappedBy: 'idVoiture', targetEntity: Reservation::class, cascade: ['remove'])]
    private Collection $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getPuissance(): ?string
    {
        return $this->puissance;
    }

    public function setPuissance(string $puissance): self
    {
        $this->puissance = $puissance;

        return $this;
    }

    public function getPrixJours(): ?string
    {
        return $this->prixJours;
    }

    public function setPrixJours(string $prixJours): self
    {
        $this->prixJours = $prixJours;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getEnergie(): ?string
    {
        return $this->energie;
    }

    public function setEnergie(string $energie): self
    {
        $this->energie = $energie;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getIdLocateur(): ?int
    {
        return $this->idLocateur;
    }

    public function setIdLocateur(int $idLocateur): self
    {
        $this->idLocateur = $idLocateur;

        return $this;
    }


    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations->add($reservation);
            $reservation->setIdVoiture($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getIdVoiture() === $this) {
                $reservation->setIdVoiture(null);
            }
        }

        return $this;
    }


}
