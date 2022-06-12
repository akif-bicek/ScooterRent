<?php

namespace App\Entity;

use App\Repository\VehicleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VehicleRepository::class)]
class Vehicle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $Brand;

    #[ORM\Column(type: 'string', length: 50)]
    private $Type;

    #[ORM\Column(type: 'boolean')]
    private $BikeOrScooter;

    #[ORM\Column(type: 'smallint')]
    private $MaxPassenger;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrand(): ?string
    {
        return $this->Brand;
    }

    public function setBrand(string $Brand): self
    {
        $this->Brand = $Brand;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

    public function isBikeOrScooter(): ?bool
    {
        return $this->BikeOrScooter;
    }

    public function setBikeOrScooter(bool $BikeOrScooter): self
    {
        $this->BikeOrScooter = $BikeOrScooter;

        return $this;
    }

    public function getMaxPassenger(): ?int
    {
        return $this->MaxPassenger;
    }

    public function setMaxPassenger(int $MaxPassenger): self
    {
        $this->MaxPassenger = $MaxPassenger;

        return $this;
    }
}
