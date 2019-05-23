<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MenuItemRepository")
 */
class MenuItem
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
    private $Gerechtcode;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $SubgerechtCode;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $MenuItemcode;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $MenuItem;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $Prijs;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Bestelling", mappedBy="MenuItemcode")
     */
    private $bestellings;

    public function __construct()
    {
        $this->bestellings = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGerechtcode(): ?string
    {
        return $this->Gerechtcode;
    }

    public function setGerechtcode(string $Gerechtcode): self
    {
        $this->Gerechtcode = $Gerechtcode;

        return $this;
    }

    public function getSubgerechtCode(): ?string
    {
        return $this->SubgerechtCode;
    }

    public function setSubgerechtCode(string $SubgerechtCode): self
    {
        $this->SubgerechtCode = $SubgerechtCode;

        return $this;
    }

    public function getMenuItemcode(): ?string
    {
        return $this->MenuItemcode;
    }

    public function setMenuItemcode(string $MenuItemcode): self
    {
        $this->MenuItemcode = $MenuItemcode;

        return $this;
    }

    public function getMenuItem(): ?string
    {
        return $this->MenuItem;
    }

    public function setMenuItem(string $MenuItem): self
    {
        $this->MenuItem = $MenuItem;

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
     * @return Collection|Bestelling[]
     */
    public function getBestellings(): Collection
    {
        return $this->bestellings;
    }

    public function addBestelling(Bestelling $bestelling): self
    {
        if (!$this->bestellings->contains($bestelling)) {
            $this->bestellings[] = $bestelling;
            $bestelling->setMenuItemcode($this);
        }

        return $this;
    }

    public function removeBestelling(Bestelling $bestelling): self
    {
        if ($this->bestellings->contains($bestelling)) {
            $this->bestellings->removeElement($bestelling);
            // set the owning side to null (unless already changed)
            if ($bestelling->getMenuItemcode() === $this) {
                $bestelling->setMenuItemcode(null);
            }
        }

        return $this;
    }
}
