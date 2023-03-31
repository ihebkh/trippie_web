<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UtilisateurRepository;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(type: "integer")]
    private ?int $id_user = null;
   

  
    #[ORM\Column(length:8)]
    private ?string $cin=null;



    #[ORM\Column(length:100)]
    private ?string $nom=null;

    
    #[ORM\Column(length:100)]
    private ?string $prenom=null;


    #[ORM\OneToMany(targetEntity: 'App\Entity\Role', mappedBy: 'id_user')]
    private $roles;


    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): self
    {
         $this->id_user=$id_user;

         return $this;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(string $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    


}
