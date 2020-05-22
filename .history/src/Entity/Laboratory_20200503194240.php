<?php

namespace App\Entity;

use App\Entity\Users;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\UploadedFile;
/**
 * @Vich\Uploadable()
 *
 * @ORM\Entity(repositoryClass="App\Repository\LaboratoryRepository")
 */
class Laboratory extends Users
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\Regex("#^[a-zA-Z]{4,120}$#", message="Ce champ ne doit pas contenir de caractères spéciaux ou de chiffres")
     *@ORM\Column(type="string", length=255)
     */
    private $nameLaboratory;

    /**
     * @Assert\Regex("#^\+(221)-[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}$#", message="Votre numéro suivre ce format : +221-(77/76/70)-000-00-00")
     * @ORM\Column(type="string", length=255)
     */
    private $numberPhone;

    /**
     * @ORM\Column(type="boolean", options={"default":true})
     */
    private $enable=true;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\CategoryLaboratory", inversedBy="laboratories")
     */
    private $categoryLaboratory;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\SocialNetworks", inversedBy="laboratories")
     */
    private $socialNetworks;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Location", inversedBy="laboratory", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $location;

    /**
     * @var \DateTime $updatedAt
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \DateTime $createdAt
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @Gedmo\Slug(fields={"nameLaboratory"})
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageName;
    
    /**
     * @var File|null
     * @Vich\UploadableField(mapping="laboratoryPicture", fileNameProperty="imageName")
     */
    private $imageFile;
    


    public function __construct()
    {
        parent::__construct();
        $this->categoryLaboratory = new ArrayCollection();
        $this->socialNetworks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameLaboratory(): ?string
    {
        return $this->nameLaboratory;
    }

    public function setNameLaboratory(string $nameLaboratory): self
    {
        $this->nameLaboratory = $nameLaboratory;

        return $this;
    }

    public function getNumberPhone(): ?string
    {
        return $this->numberPhone;
    }

    public function setNumberPhone(string $numberPhone): self
    {
        $this->numberPhone = $numberPhone;

        return $this;
    }

    public function getEnable(): ?bool
    {
        return $this->enable;
    }

    public function setEnable(bool $enable): self
    {
        $this->enable = $enable;

        return $this;
    }

    /**
     * @return Collection|CategoryLaboratory[]
     */
    public function getCategoryLaboratory(): Collection
    {
        return $this->categoryLaboratory;
    }

    public function addCategoryLaboratory(CategoryLaboratory $categoryLaboratory): self
    {
        if (!$this->categoryLaboratory->contains($categoryLaboratory)) {
            $this->categoryLaboratory[] = $categoryLaboratory;
        }

        return $this;
    }

    public function removeCategoryLaboratory(CategoryLaboratory $categoryLaboratory): self
    {
        if ($this->categoryLaboratory->contains($categoryLaboratory)) {
            $this->categoryLaboratory->removeElement($categoryLaboratory);
        }

        return $this;
    }

    /**
     * @return Collection|SocialNetworks[]
     */
    public function getSocialNetworks(): Collection
    {
        return $this->socialNetworks;
    }

    public function addSocialNetwork(SocialNetworks $socialNetwork): self
    {
        if (!$this->socialNetworks->contains($socialNetwork)) {
            $this->socialNetworks[] = $socialNetwork;
        }

        return $this;
    }

    public function removeSocialNetwork(SocialNetworks $socialNetwork): self
    {
        if ($this->socialNetworks->contains($socialNetwork)) {
            $this->socialNetworks->removeElement($socialNetwork);
        }

        return $this;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function setLocation(Location $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageName(?string $imageName): self
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * Get the value of imageFile
     */ 
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * Set the value of imageFile
     *
     * @return  self
     */ 
    public function setImageFile($imageFile)
    {
        $this->imageFile = $imageFile;
        if($this->imageFile instanceof UploadedFile)
        {
            $this->updatedAt = new \DateTime('now');

        }

        return $this;
    }
}
