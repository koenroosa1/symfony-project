<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KlantRepository")
 */
class Klant
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
    private $Klantid;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $Klantnaam;

    /**
     * @ORM\Column(type="string", length=11)
     */
    private $Telefoon;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKlantid(): ?string
    {
        return $this->Klantid;
    }

    public function setKlantid(string $Klantid): self
    {
        $this->Klantid = $Klantid;

        return $this;
    }

    public function getKlantnaam(): ?string
    {
        return $this->Klantnaam;
    }

    public function setKlantnaam(string $Klantnaam): self
    {
        $this->Klantnaam = $Klantnaam;

        return $this;
    }

    public function getTelefoon(): ?string
    {
        return $this->Telefoon;
    }

    public function setTelefoon(string $Telefoon): self
    {
        $this->Telefoon = $Telefoon;

        return $this;
    }
}
