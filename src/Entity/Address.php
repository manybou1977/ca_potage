<?php

namespace App\Entity;

use App\Repository\AddressRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AddressRepository::class)]
class Address
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $numeroVoie = null;

    #[ORM\Column(length: 255)]
    private ?string $nomVoie = null;

    #[ORM\Column(length: 255)]
    private ?string $CodePostal = null;

    #[ORM\Column(length: 255)]
    private ?string $Ville = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroVoie(): ?string
    {
        return $this->numeroVoie;
    }

    public function setNumeroVoie(string $numeroVoie): static
    {
        $this->numeroVoie = $numeroVoie;

        return $this;
    }

    public function getNomVoie(): ?string
    {
        return $this->nomVoie;
    }

    public function setNomVoie(string $nomVoie): static
    {
        $this->nomVoie = $nomVoie;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->CodePostal;
    }

    public function setCodePostal(string $CodePostal): static
    {
        $this->CodePostal = $CodePostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->Ville;
    }

    public function setVille(string $Ville): static
    {
        $this->Ville = $Ville;

        return $this;
    }
}
