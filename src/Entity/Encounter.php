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
     * @ORM\ManyToMany(targetEntity=Monster::class, inversedBy="encounters")
     */
    private $monsters;

    public function __construct()
    {
        $this->characters = new ArrayCollection();
        $this->npcs = new ArrayCollection();
        $this->monsters = new ArrayCollection();
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
        foreach (($this->monsters) as $monster){
            $this->fighters[] = $monster;
        }
        return $this->fighters;
    }

    function sortFighters($a, $b)
    {
        return $a->initiative < $b->initiative;
    }

    public function setFighters(?array $fighters): self
    {
        $this->fighters = array();
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
     * @return Collection|Monster[]
     */
    public function getMonsters(): Collection
    {
        return $this->monsters;
    }

    public function addMonster(Monster $monster): self
    {
        if (!$this->monsters->contains($monster)) {
            $this->monsters[] = $monster;
        }

        return $this;
    }

    public function removeMonster(Monster $monster): self
    {
        $this->monsters->removeElement($monster);

        return $this;
    }

    public static function cmp($a, $b) 
    {
        return strcmp($a->name, $b->name);
    }
}
