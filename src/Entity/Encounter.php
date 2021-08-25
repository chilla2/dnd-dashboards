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
     * @ORM\Column(type="array", nullable=true)
     */
    private $fighters;

    /**
     * @ORM\ManyToMany(targetEntity=Character::class, inversedBy="encounters")
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

    public function __toString(): string {
        return (string) $this->getId();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFighters(): ?array
    {
        $this->fighters = array();
        foreach (($this->characters) as $character) {
            $this->fighters[] = $character;
        }
        foreach (($this->npcs) as $npc){
            $this->fighters[] = $npc;
        }
        foreach (($this->creatures) as $creature){
            $this->fighters[] = $creature;
        }
        return $this->fighters;
    }

    public function setFighters(?array $fighters): self
    {
        $this->fighters = $fighters;

        return $this;
    }

    /**
     * @return Collection|Character[]
     */
    public function getCharacters(): Collection
    {
        return $this->characters;
    }

    public function addCharacter(Character $character): self
    {
        if (!$this->characters->contains($character)) {
            $this->characters[] = $character;
        }

        return $this;
    }

    public function removeCharacter(Character $character): self
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
