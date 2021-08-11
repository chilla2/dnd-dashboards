<?php

namespace App\Entity;

use App\Repository\EncounterRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass=EncounterRepository::class)
 */
class Encounter
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
     * @ORM\Column(type="array", nullable=true)
     */
    private $combatants = [];

    /**
     * @ORM\ManyToMany(targetEntity=Player::class, inversedBy="encounters")
     */
    private $characters;

    /**
     * @ORM\ManyToMany(targetEntity=Npc::class, inversedBy="encounters")
     */
    private $npcs;

    /**
     * @ORM\ManyToMany(targetEntity=Creature::class, inversedBy="encounters")
     */
    private $creatures;

    public function __construct()
    {
        $this->characters = new ArrayCollection();
        $this->npcs = new ArrayCollection();
        $this->creatures = new ArrayCollection();
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

    public function getCombatants(): ?array
    {
        return $this->combatants;
    }

    public function setCombatants(?array $combatants): self
    {
        $this->combatants = $combatants;

        return $this;
    }

    /**
     * @return Collection|Player[]
     */
    public function getCharacters(): Collection
    {
        return $this->characters;
    }

    public function addCharacter(Player $character): self
    {
        if (!$this->characters->contains($character)) {
            $this->characters[] = $character;
        }

        return $this;
    }

    public function removeCharacter(Player $character): self
    {
        $this->characters->removeElement($character);

        return $this;
    }

    /**
     * @return Collection|Npc[]
     */
    public function getNpcs(): Collection
    {
        return $this->npcs;
    }

    public function addNpc(Npc $npc): self
    {
        if (!$this->npcs->contains($npc)) {
            $this->npcs[] = $npc;
        }

        return $this;
    }

    public function removeNpc(Npc $npc): self
    {
        $this->npcs->removeElement($npc);

        return $this;
    }

    /**
     * @return Collection|Creature[]
     */
    public function getCreatures(): Collection
    {
        return $this->creatures;
    }

    public function addCreature(Creature $creature): self
    {
        if (!$this->creatures->contains($creature)) {
            $this->creatures[] = $creature;
        }

        return $this;
    }

    public function removeCreature(Creature $creature): self
    {
        $this->creatures->removeElement($creature);

        return $this;
    }
}
