<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryDrugsRepository")
 */
class CategoryDrugs
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
    private $name;

    /**
     *  @Gedmo\Slug(fields={"name"})
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="boolean")
     */
    private $enable;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Drugs", mappedBy="categoryDrugs")
     */
    private $drugs;

    public function __construct()
    {
        $this->drugs = new ArrayCollection();
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

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

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
     * @return Collection|Drugs[]
     */
    public function getDrugs(): Collection
    {
        return $this->drugs;
    }

    public function addDrug(Drugs $drug): self
    {
        if (!$this->drugs->contains($drug)) {
            $this->drugs[] = $drug;
            $drug->addCategoryDrug($this);
        }

        return $this;
    }

    public function removeDrug(Drugs $drug): self
    {
        if ($this->drugs->contains($drug)) {
            $this->drugs->removeElement($drug);
            $drug->removeCategoryDrug($this);
        }

        return $this;
    }
public function __toString()
{
    return $this->getName();
}
}
