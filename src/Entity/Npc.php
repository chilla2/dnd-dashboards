<?php

namespace App\Entity;

use App\Repository\NpcRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=NpcRepository::class)
 * @Vich\Uploadable
 */
class Npc
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
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $showPlayers;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $link;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $initiative;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $armorClass;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $hp;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $initiativeRoll;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $conditions = [];

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="npc_image", fileNameProperty="imageName", size="imageSize")
     *
     * @var File|null
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @var string|null
     */
    private $imageName;

    /**
     * @ORM\Column(type="integer", nullable=true)
     *
     * @var int|null
     */
    private $imageSize;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @ORM\ManyToMany(targetEntity=Encounter::class, mappedBy="npcs")
     */
    private $encounters;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $showDm;

    public function __construct()
    {
        $this->encounters = new ArrayCollection();
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile
     */
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime("now");
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageSize(?int $imageSize): void
    {
        $this->imageSize = $imageSize;
    }

    public function getImageSize(): ?int
    {
        return $this->imageSize;
    }

    public function getUpdatedAt(): \DateTime
    {
        if ($this->updatedAt == null) {
            $this->updatedAt = new \DateTime("now");
        }
        return $this->updatedAt;
    }

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

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

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

    public function getArmorClass(): ?int
    {
        return $this->armorClass;
    }

    public function setArmorClass(?int $armorClass): self
    {
        $this->armorClass = $armorClass;

        return $this;
    }

    public function getHp(): ?int
    {
        return $this->hp;
    }

    public function setHp(?int $hp): self
    {
        $this->hp = $hp;

        return $this;
    }

    public function getInitiativeRoll(): ?int
    {
        return $this->initiativeRoll;
    }

    public function setInitiativeRoll(?int $initiativeRoll): self
    {
        $this->initiativeRoll = $initiativeRoll;

        return $this;
    }

    public function getConditions(): ?array
    {
        return $this->conditions;
    }

    public function setConditions(?array $conditions): self
    {
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * @return Collection|Encounter[]
     */
    public function getEncounters(): Collection
    {
        return $this->encounters;
    }

    public function addEncounter(Encounter $encounter): self
    {
        if (!$this->encounters->contains($encounter)) {
            $this->encounters[] = $encounter;
            $encounter->addNpc($this);
        }

        return $this;
    }

    public function removeEncounter(Encounter $encounter): self
    {
        if ($this->encounters->removeElement($encounter)) {
            $encounter->removeNpc($this);
        }

        return $this;
    }

    public function getShowDm(): ?bool
    {
        return $this->showDm;
    }

    public function setShowDm(?bool $showDm): self
    {
        $this->showDm = $showDm;

        return $this;
    }
}
