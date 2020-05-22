<?php

namespace App\Entity;

use App\Entity\Users;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
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
     * @ORM\Column(type="string", length=255)
     */
    private $nameLaboratory;

    /**
     * @ORM\Column(type="integer")
     */
    private $numberPhone;

    /**
     * @ORM\Column(type="boolean", options={"default":true})
     */
    private $enable;

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

    public function getNumberPhone(): ?int
    {
        return $this->numberPhone;
    }

    public function setNumberPhone(int $numberPhone): self
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
}
