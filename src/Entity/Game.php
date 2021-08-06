<?php

namespace App\Entity;

use App\Repository\GameRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GameRepository::class)
 */
class Game
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $combatMode;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $combatEncounter = [];

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $backgroundFileName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCombatMode(): ?bool
    {
        return $this->combatMode;
    }

    public function setCombatMode(?bool $combatMode): self
    {
        $this->combatMode = $combatMode;

        return $this;
    }

    public function getCombatEncounter(): ?array
    {
        return $this->combatEncounter;
    }

    public function setCombatEncounter(?array $combatEncounter): self
    {
        $this->combatEncounter = $combatEncounter;

        return $this;
    }

    public function getBackgroundFileName(): ?string
    {
        return $this->backgroundFileName;
    }

    public function setBackgroundFileName(?string $backgroundFileName): self
    {
        $this->backgroundFileName = $backgroundFileName;

        return $this;
    }
}
