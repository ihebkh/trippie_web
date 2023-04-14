<?php

namespace App\Entity;

use App\Repository\CadeauRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CadeauRepository::class)]
class Cadeau
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idcadeau = null;

    #[ORM\Column(length: 200)]
    public ?string $nom_cadeay = null;

    #[ORM\Column]
    private ?int $reccurence = null;

    #[ORM\Column(length: 200)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $valeur = null;

    #[ORM\ManyToOne(inversedBy: 'cadeau')]
    private ?Coupon $coupon = null;

    public function getId(): ?int
    {
        return $this->idcadeau;
    }

    public function getNomCadeay(): ?string
    {
        return $this->nom_cadeay;
    }

    public function setNomCadeay(string $nom_cadeay): self
    {
        $this->nom_cadeay = $nom_cadeay;

        return $this;
    }

    public function getReccurence(): ?int
    {
        return $this->reccurence;
    }

    public function setReccurence(int $reccurence): self
    {
        $this->reccurence = $reccurence;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getValeur(): ?int
    {
        return $this->valeur;
    }

    public function setValeur(int $valeur): self
    {
        $this->valeur = $valeur;

        return $this;
    }

    public function getCoupon(): ?Coupon
    {
        return $this->coupon;
    }

    public function setCoupon(?Coupon $coupon): self
    {
        $this->coupon = $coupon;

        return $this;
    }

    public function getIdcadeau(): ?int
    {
        return $this->idcadeau;
    }
}
