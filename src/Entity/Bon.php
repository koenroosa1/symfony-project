<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BonRepository")
 */
class Bon
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Bestelling", inversedBy="bons")
     * @ORM\JoinColumn(nullable=false)
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
     * @ORM\Column(type="string", length=2)
     */
    private $Wijze_van_betaling;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTafel(): ?Bestelling
    {
        return $this->Tafel;
    }

    public function setTafel(?Bestelling $Tafel): self
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

    public function getWijzeVanBetaling(): ?string
    {
        return $this->Wijze_van_betaling;
    }

    public function setWijzeVanBetaling(string $Wijze_van_betaling): self
    {
        $this->Wijze_van_betaling = $Wijze_van_betaling;

        return $this;
    }
}
