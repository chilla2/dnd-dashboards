<?php

namespace App\Entity;

use App\Repository\OtherRepository;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Entity(repositoryClass=OtherRepository::class)
 * @Vich\Uploadable
 */
class Other
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
    private $heading;

    /**
     * @ORM\Column(type="text", length=255, nullable=true)
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

    public function __toString(): string {
        return (string) $this->getHeading().' - '.$this->getDescription();
    }

    /**
     * @ORM\Column(type="string", nullable=true))
     *
     * @var string|null
     */
    private $imageName;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="other_image", fileNameProperty="imageName", size="imageSize")
     *
     * @var File|null
     */
    private $imageFile;

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
    * @ORM\Column(type="boolean", nullable=true)
    */
   private $showDm;

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

    public function getUpdatedAt(): \DateTime
    {
        if ($this->updatedAt == null) {
            $this->updatedAt = new \DateTime("now");
        }
        return $this->updatedAt;
    }

    public function setImageSize(?int $imageSize): void
    {
        $this->imageSize = $imageSize;
    }

    public function getImageSize(): ?int
    {
        return $this->imageSize;
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHeading(): ?string
    {
        return $this->heading;
    }

    public function setHeading(string $heading): self
    {
        $this->heading = $heading;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
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

    public function setShowPlayers(?bool $showPlayers): self
    {
        $this->showPlayers = $showPlayers;

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
