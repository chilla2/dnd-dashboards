<?php

namespace App\Entity;

use App\Repository\CreatureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CreatureRepository::class)
 */
class Creature
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $notes;

    /**
     * @ORM\Column(type="boolean")
     */
    private $showPlayers;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $initiative;

    public function __toString(): string {
        return (string) $this->getName().' - '.$this->getDescription();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getShowPlayers(): ?bool
    {
        return $this->showPlayers;
    }

    public function setShowPlayers(bool $showPlayers): self
    {
        $this->showPlayers = $showPlayers;

        return $this;
    }

    public function getInitiative(): ?bool
    {
        return $this->initiative;
    }

    public function setInitiative(?bool $initiative): self
    {
        $this->initiative = $initiative;

        return $this;
    }
}
