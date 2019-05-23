<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SubgerechtRepository")
 */
class Subgerecht
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Gerecht", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Gerechtcode;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $GerechtCode;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $SubgerechtCode;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $Subgerecht;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGerechtcode(): ?Gerecht
    {
        return $this->Gerechtcode;
    }

    public function setGerechtcode(Gerecht $Gerechtcode): self
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

    public function getSubgerecht(): ?string
    {
        return $this->Subgerecht;
    }

    public function setSubgerecht(string $Subgerecht): self
    {
        $this->Subgerecht = $Subgerecht;

        return $this;
    }
}
