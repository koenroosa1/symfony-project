<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BestellingRepository")
 */
class Bestelling
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $Tafel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Datum;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Tijd;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MenuItem", inversedBy="bestellings")
     * @ORM\JoinColumn(nullable=false)
     */
    private $MenuItemcode;

    /**
     * @ORM\Column(type="integer")
     */
    private $Aantal;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $Prijs;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Bon", mappedBy="Tafel")
     */
    private $bons;

    /**
     * @ORM\Column(type="boolean")
     */
    private $klaar;

    public function __construct()
    {
        $this->bons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getTafel(): ?string
    {
        return $this->Tafel;
    }

    public function setTafel(string $Tafel): self
    {
        $this->Tafel = $Tafel;

        return $this;
    }

    public function getDatum(): ?string
    {
        return $this->Datum;
    }

    public function setDatum(string $Datum): self
    {
        $this->Datum = $Datum;

        return $this;
    }

    public function getTijd(): ?string
    {
        return $this->Tijd;
    }

    public function setTijd(string $Tijd): self
    {
        $this->Tijd = $Tijd;

        return $this;
    }

    public function getMenuItemcode(): ?MenuItem
    {
        return $this->MenuItemcode;
    }

    public function setMenuItemcode(?MenuItem $MenuItemcode): self
    {
        $this->MenuItemcode = $MenuItemcode;

        return $this;
    }

    public function getAantal(): ?int
    {
        return $this->Aantal;
    }

    public function setAantal(int $Aantal): self
    {
        $this->Aantal = $Aantal;

        return $this;
    }

    public function getPrijs()
    {
        return $this->Prijs;
    }

    public function setPrijs($Prijs): self
    {
        $this->Prijs = $Prijs;

        return $this;
    }

    /**
     * @return Collection|Bon[]
     */
    public function getBons(): Collection
    {
        return $this->bons;
    }

    public function addBon(Bon $bon): self
    {
        if (!$this->bons->contains($bon)) {
            $this->bons[] = $bon;
            $bon->setTafel($this);
        }

        return $this;
    }

    public function removeBon(Bon $bon): self
    {
        if ($this->bons->contains($bon)) {
            $this->bons->removeElement($bon);
            // set the owning side to null (unless already changed)
            if ($bon->getTafel() === $this) {
                $bon->setTafel(null);
            }
        }

        return $this;
    }

    public function getKlaar(): ?bool
    {
        return $this->klaar;
    }

    public function setKlaar(bool $klaar): self
    {
        $this->klaar = $klaar;

        return $this;
    }
}
