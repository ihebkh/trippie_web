<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\LocateurRepository;
use App\Entity\Role;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Enum\Etat;

#[ORM\Entity(repositoryClass: LocateurRepository::class)]
class Locateur 
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_loc = null;


    #[ORM\Column(length: 200)]
    private ?string $img = null;



    #[ORM\Column(length: 255)]
    private ?string $nom_agence = null;



    #[ORM\Column]
    private ?int $gsm = null;


   #[ORM\Column(length: 150)]
    private ?string $email = null;


    #[ORM\Column(length: 100)]
    private ?string $password = null;



    #[ORM\ManyToOne(inversedBy:'locateurs')]
    #[ORM\JoinColumn(name: "id_role", referencedColumnName: "id_role")]
    private ?Role $id_role;

    #[ORM\Column(options: ['default' => 'enabled'], columnDefinition: "ENUM('enabled', 'disabled')")]
    private ?string $etat = null;

    public function getIdLoc(): ?int
    {
        return $this->id_loc;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getNomAgence(): ?string
    {
        return $this->nom_agence;
    }

    public function setNomAgence(string $nom_agence): self
    {
        $this->nom_agence = $nom_agence;

        return $this;
    }

    public function getGsm(): ?int
    {
        return $this->gsm;
    }

    public function setGsm(int $gsm): self
    {
        $this->gsm = $gsm;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getIdRole(): ?Role
    {
        return $this->id_role;
    }

    public function setIdRole(?Role $id_role): self
    {
        $this->id_role = $id_role;

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

   
}
