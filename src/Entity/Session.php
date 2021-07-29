<?php

namespace App\Entity;

use App\Repository\SessionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SessionRepository::class)
 */
class Session
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $plannedDevelopments = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $actualDevelopments = [];

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $notes;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $resources = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getPlannedDevelopments(): ?array
    {
        return $this->plannedDevelopments;
    }

    public function setPlannedDevelopments(?array $plannedDevelopments): self
    {
        $this->plannedDevelopments = $plannedDevelopments;

        return $this;
    }

    public function getActualDevelopments(): ?array
    {
        return $this->actualDevelopments;
    }

    public function setActualDevelopments(?array $actualDevelopments): self
    {
        $this->actualDevelopments = $actualDevelopments;

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

    public function getResources(): ?array
    {
        return $this->resources;
    }

    public function setResources(array $resources): self
    {
        $this->resources = $resources;

        return $this;
    }
}
