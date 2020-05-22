<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryLaboratoryRepository")
 */
class CategoryLaboratory
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
    private $nameCategory;

    /**
     * @ORM\Column(type="boolean")
     */
    private $enable=true;

    /**
     * @Gedmo\Slug(fields={"nameCategory"})
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Laboratory", mappedBy="categoryLaboratory")
     */
    private $laboratories;

    public function __construct()
    {
        $this->laboratories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameCategory(): ?string
    {
        return $this->nameCategory;
    }

    public function setNameCategory(string $nameCategory): self
    {
        $this->nameCategory = $nameCategory;

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

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return Collection|Laboratory[]
     */
    public function getLaboratories(): Collection
    {
        return $this->laboratories;
    }

    public function addLaboratory(Laboratory $laboratory): self
    {
        if (!$this->laboratories->contains($laboratory)) {
            $this->laboratories[] = $laboratory;
            $laboratory->addCategoryLaboratory($this);
        }

        return $this;
    }

    public function removeLaboratory(Laboratory $laboratory): self
    {
        if ($this->laboratories->contains($laboratory)) {
            $this->laboratories->removeElement($laboratory);
            $laboratory->removeCategoryLaboratory($this);
        }

        return $this;
    }
}
