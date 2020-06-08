<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PharmacyAvailabeDrugsRepository")
 */
class PharmacyAvailabeDrugs
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isAvailable;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pharmacy", inversedBy="pharmacyAvailabeDrugs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pharmacy;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Drugs", inversedBy="pharmacyAvailabeDrugs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $drugs;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $price;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsAvailable(): ?bool
    {
        return $this->isAvailable;
    }

    public function setIsAvailable(bool $isAvailable): self
    {
        $this->isAvailable = $isAvailable;

        return $this;
    }

    public function getPharmacy(): ?Pharmacy
    {
        return $this->pharmacy;
    }

    public function setPharmacy(?Pharmacy $pharmacy): self
    {
        $this->pharmacy = $pharmacy;

        return $this;
    }

    public function getDrugs(): ?Drugs
    {
        return $this->drugs;
    }

    public function setDrugs(?Drugs $drugs): self
    {
        $this->drugs = $drugs;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }
    public function __toString(){
        return $this->getDrugs();

    }
}
