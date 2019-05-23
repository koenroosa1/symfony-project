<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GerechtRepository")
 */
class Gerecht
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
     * @ORM\Column(type="string", length=20)
     */
    private $Gerecht;

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

    public function getGerecht(): ?string
    {
        return $this->Gerecht;
    }

    public function setGerecht(string $Gerecht): self
    {
        $this->Gerecht = $Gerecht;

        return $this;
    }
}
