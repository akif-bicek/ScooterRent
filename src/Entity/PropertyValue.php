<?php

namespace App\Entity;

use App\Repository\PropertyValueRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PropertyValueRepository::class)]
class PropertyValue
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 150)]
    private $Value;

    #[ORM\Column(type: 'integer')]
    private $VehicleID;

    #[ORM\Column(type: 'integer')]
    private $PropertyID;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValue(): ?string
    {
        return $this->Value;
    }

    public function setValue(string $Value): self
    {
        $this->Value = $Value;

        return $this;
    }

    public function getVehicleID(): ?int
    {
        return $this->VehicleID;
    }

    public function setVehicleID(int $VehicleID): self
    {
        $this->VehicleID = $VehicleID;

        return $this;
    }

    public function getPropertyID(): ?int
    {
        return $this->PropertyID;
    }

    public function setPropertyID(int $PropertyID): self
    {
        $this->PropertyID = $PropertyID;

        return $this;
    }
}
