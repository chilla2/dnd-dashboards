<?php

namespace App\Entity;

use App\Repository\PrivateDashboardRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PrivateDashboardRepository::class)
 */
class PrivateDashboard
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
    private $combatMode;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $events = [];

    /**
     * @ORM\OneToOne(targetEntity=PublicDashboard::class, inversedBy="privateDashboard", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $publicDashboard;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCombatMode(): ?bool
    {
        return $this->combatMode;
    }

    public function setCombatMode(bool $combatMode): self
    {
        $this->combatMode = $combatMode;

        return $this;
    }

    public function getEvents(): ?array
    {
        return $this->events;
    }

    public function setEvents(?array $events): self
    {
        $this->events = $events;

        return $this;
    }

    public function getPublicDashboard(): ?PublicDashboard
    {
        return $this->publicDashboard;
    }

    public function setPublicDashboard(PublicDashboard $publicDashboard): self
    {
        $this->publicDashboard = $publicDashboard;

        return $this;
    }
}
