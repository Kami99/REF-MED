<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DrugsConsomersRepository")
 */
class DrugsConsomers
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ageMin;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ageMax;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nameConsomers;

    /**
     * @ORM\Column(type="boolean", options={"default":true})
     */
    private $enable;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Drugs", mappedBy="drugsConsommers")
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

    public function getAgeMin(): ?int
    {
        return $this->ageMin;
    }

    public function getFullAge()
    {
        return '{$this->getAgeMin} à {$this->getAgeMax}';
    }
    public function setAgeMin(?int $ageMin): self
    {
        $this->ageMin = $ageMin;

        return $this;
    }

    public function getAgeMax(): ?int
    {
        return $this->ageMax;
    }

    public function setAgeMax(?int $ageMax): self
    {
        $this->ageMax = $ageMax;

        return $this;
    }

    public function getNameConsomers(): ?string
    {
        return $this->nameConsomers;
    }

    public function setNameConsomers(?string $nameConsomers): self
    {
        $this->nameConsomers = $nameConsomers;

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
            $drug->addDrugsConsommer($this);
        }

        return $this;
    }

    public function removeDrug(Drugs $drug): self
    {
        if ($this->drugs->contains($drug)) {
            $this->drugs->removeElement($drug);
            $drug->removeDrugsConsommer($this);
        }

        return $this;
    }
    public function __toString(){
        return $this->getNameConsomers();

    }
}
