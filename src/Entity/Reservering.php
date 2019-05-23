<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReserveringRepository")
 */
class Reservering
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
     * @ORM\Column(type="string", length=5)
     */
    private $KlantId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Aantal;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getKlantId(): ?string
    {
        return $this->KlantId;
    }

    public function setKlantId(string $KlantId): self
    {
        $this->KlantId = $KlantId;

        return $this;
    }

    public function getAantal(): ?string
    {
        return $this->Aantal;
    }

    public function setAantal(string $Aantal): self
    {
        $this->Aantal = $Aantal;

        return $this;
    }
}
