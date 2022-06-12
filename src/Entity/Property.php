<?php

namespace App\Entity;

use App\Repository\PropertyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PropertyRepository::class)]
class Property
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $PropertyName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPropertyName(): ?string
    {
        return $this->PropertyName;
    }

    public function setPropertyName(string $PropertyName): self
    {
        $this->PropertyName = $PropertyName;

        return $this;
    }
}
