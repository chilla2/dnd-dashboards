<?php

namespace App\Entity;

use App\Repository\PublicDashboardRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PublicDashboardRepository::class)
 */
class PublicDashboard
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
     * @ORM\OneToOne(targetEntity=PrivateDashboard::class, mappedBy="publicDashboard", cascade={"persist", "remove"})
     */
    private $privateDashboard;

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

    public function getPrivateDashboard(): ?PrivateDashboard
    {
        return $this->privateDashboard;
    }

    public function setPrivateDashboard(PrivateDashboard $privateDashboard): self
    {
        // set the owning side of the relation if necessary
        if ($privateDashboard->getPublicDashboard() !== $this) {
            $privateDashboard->setPublicDashboard($this);
        }

        $this->privateDashboard = $privateDashboard;

        return $this;
    }
}
