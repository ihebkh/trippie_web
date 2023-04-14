<?php

namespace App\Entity;

use App\Repository\CouponRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CouponRepository::class)]
class Coupon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "You must complete all empty fields")]
    #[Assert\GreaterThanOrEqual("today")]
    public ?\DateTimeInterface $date_debut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "You must complete all empty fields")]
    #[Assert\GreaterThan(propertyPath: "date_debut", message: "The expiration date should be greater than the start date")]
    public ?\DateTimeInterface $date_experatio = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "The reduction rate should not be blank.")]
    #[Assert\Range(min: 0, max: 100, notInRangeMessage: "The reduction rate should be between {{ min }} and {{ max }}.")]
    private ?int $taux = null;
  
    #[ORM\Column(length: 200)]
    public ?string $code_coupon = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "You must complete all empty fields")]
#[Assert\Type(type: 'integer', message: "The value {{ value }} is not a valid {{ type }}.")]
#[Assert\GreaterThan(0, message: "The number of uses must be greater than 0.")]
    public ?int $nbr_utilisation = null;

    #[ORM\Column(length: 200)]
    #[Assert\Choice(choices: ['vip', 'simple'], message: 'The type must be either "vip" or "simple".')]
    private ?string $type = null;

    #[ORM\OneToMany(mappedBy: 'coupon', targetEntity: Cadeau::class)]
    private Collection $cadeau;

    public function __construct()
    {
        $this->cadeau = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDateDebut(\DateTimeInterface $date_debut): self
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getDateExperatio(): ?\DateTimeInterface
    {
        return $this->date_experatio;
    }

    public function setDateExperatio(\DateTimeInterface $date_experatio): self
    {
        $this->date_experatio = $date_experatio;

        return $this;
    }

    public function getTaux(): ?int
    {
        return $this->taux;
    }

    public function setTaux(int $taux): self
    {
        $this->taux = $taux;

        return $this;
    }

    public function getCodeCoupon(): ?string
    {
        return $this->code_coupon;
    }

    public function setCodeCoupon(string $code_coupon): self
    {
        $this->code_coupon = $code_coupon;

        return $this;
    }

    public function getNbrUtilisation(): ?int
    {
        return $this->nbr_utilisation;
    }

    public function setNbrUtilisation(int $nbr_utilisation): self
    {
        $this->nbr_utilisation = $nbr_utilisation;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection<int, cadeau>
     */
    public function getCadeau(): Collection
    {
        return $this->cadeau;
    }

    public function addCadeau(cadeau $cadeau): self
    {
        if (!$this->cadeau->contains($cadeau)) {
            $this->cadeau->add($cadeau);
            $cadeau->setCoupon($this);
        }

        return $this;
    }

    public function removeCadeau(cadeau $cadeau): self
    {
        if ($this->cadeau->removeElement($cadeau)) {
            // set the owning side to null (unless already changed)
            if ($cadeau->getCoupon() === $this) {
                $cadeau->setCoupon(null);
            }
        }

        return $this;
    }
    public function __toString()
{
    return $this->code_coupon;
}

}
