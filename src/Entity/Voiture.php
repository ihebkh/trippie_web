<?php

namespace App\Entity;
use App\Repository\VoitureRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Reservation;
#[ORM\Entity(repositoryClass: VoitureRepository::class)]
class Voiture
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $matricule = null;


    #[ORM\Column(length: 255)]
    private ?string $marque = null;

    #[ORM\Column(length: 255)]
    private ?string $puissance = null;

    #[ORM\Column(length: 255)]
    private ?string $prixJours = null;

    #[ORM\Column(length: 255)]
    private ?string $picture= null;

    #[ORM\Column(length: 255)]
    private ?string $energie = null;

    #[ORM\Column(length: 255)]
    private ?string $etat = null;

    #[ORM\Column]
    private ?int $idLocateur = null;
    #[ORM\OneToMany(targetEntity: 'App\Entity\Reservation', mappedBy: 'id')]
    private $reservations;
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


}
