<?php

namespace App\Entity;

use App\Repository\DashboardRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DashboardRepository::class)
 */
class Dashboard
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
}
