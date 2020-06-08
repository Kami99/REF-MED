<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * @ORM\Entity(repositoryClass="App\Repository\DrugsRepository")
 */
class Drugs
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
    private $nameDrugs;

    /**
     * @ORM\Column(type="text")
     */
    private $consigne;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @Gedmo\Slug(fields={"nameDrugs"})
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\DrugsConsomers", inversedBy="drugs")
     */
    private $drugsConsommers;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\FormDrugs", inversedBy="drugs")
     */
    private $formDrugs;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\CategoryDrugs", inversedBy="drugs")
     */
    private $categoryDrugs;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\PharmacyAvailabeDrugs", mappedBy="drugs", orphanRemoval=true)
     */
    private $pharmacyAvailabeDrugs;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isAuthorised;

    public function __construct()
    {
        $this->drugsConsommers = new ArrayCollection();
        $this->formDrugs = new ArrayCollection();
        $this->categoryDrugs = new ArrayCollection();
        $this->pharmacyAvailabeDrugs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameDrugs(): ?string
    {
        return $this->nameDrugs;
    }

    public function setNameDrugs(string $nameDrugs): self
    {
        $this->nameDrugs = $nameDrugs;

        return $this;
    }

    public function getConsigne(): ?string
    {
        return $this->consigne;
    }

    public function setConsigne(string $consigne): self
    {
        $this->consigne = $consigne;

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
     * @return Collection|DrugsConsomers[]
     */
    public function getDrugsConsommers(): Collection
    {
        return $this->drugsConsommers;
    }

    public function addDrugsConsommer(DrugsConsomers $drugsConsommer): self
    {
        if (!$this->drugsConsommers->contains($drugsConsommer)) {
            $this->drugsConsommers[] = $drugsConsommer;
        }

        return $this;
    }

    public function removeDrugsConsommer(DrugsConsomers $drugsConsommer): self
    {
        if ($this->drugsConsommers->contains($drugsConsommer)) {
            $this->drugsConsommers->removeElement($drugsConsommer);
        }

        return $this;
    }

    /**
     * @return Collection|FormDrugs[]
     */
    public function getFormDrugs(): Collection
    {
        return $this->formDrugs;
    }

    public function addFormDrug(FormDrugs $formDrug): self
    {
        if (!$this->formDrugs->contains($formDrug)) {
            $this->formDrugs[] = $formDrug;
        }

        return $this;
    }

    public function removeFormDrug(FormDrugs $formDrug): self
    {
        if ($this->formDrugs->contains($formDrug)) {
            $this->formDrugs->removeElement($formDrug);
        }

        return $this;
    }

    /**
     * @return Collection|CategoryDrugs[]
     */
    public function getCategoryDrugs(): Collection
    {
        return $this->categoryDrugs;
    }

    public function addCategoryDrug(CategoryDrugs $categoryDrug): self
    {
        if (!$this->categoryDrugs->contains($categoryDrug)) {
            $this->categoryDrugs[] = $categoryDrug;
        }

        return $this;
    }

    public function removeCategoryDrug(CategoryDrugs $categoryDrug): self
    {
        if ($this->categoryDrugs->contains($categoryDrug)) {
            $this->categoryDrugs->removeElement($categoryDrug);
        }

        return $this;
    }

    /**
     * @return Collection|PharmacyAvailabeDrugs[]
     */
    public function getPharmacyAvailabeDrugs(): Collection
    {
        return $this->pharmacyAvailabeDrugs;
    }

    public function addPharmacyAvailabeDrug(PharmacyAvailabeDrugs $pharmacyAvailabeDrug): self
    {
        if (!$this->pharmacyAvailabeDrugs->contains($pharmacyAvailabeDrug)) {
            $this->pharmacyAvailabeDrugs[] = $pharmacyAvailabeDrug;
            $pharmacyAvailabeDrug->setDrugs($this);
        }

        return $this;
    }

    public function removePharmacyAvailabeDrug(PharmacyAvailabeDrugs $pharmacyAvailabeDrug): self
    {
        if ($this->pharmacyAvailabeDrugs->contains($pharmacyAvailabeDrug)) {
            $this->pharmacyAvailabeDrugs->removeElement($pharmacyAvailabeDrug);
            // set the owning side to null (unless already changed)
            if ($pharmacyAvailabeDrug->getDrugs() === $this) {
                $pharmacyAvailabeDrug->setDrugs(null);
            }
        }

        return $this;
    }
    public function __toString(){
        return $this->getNameDrugs();

    }

    public function getIsAuthorised(): ?bool
    {
        return $this->isAuthorised;
    }

    public function setIsAuthorised(bool $isAuthorised): self
    {
        $this->isAuthorised = $isAuthorised;

        return $this;
    }
}
