<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MeansPaymentRepository")
 */
class MeansPayment
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
    private $nom;

    /**
     * @ORM\Column(type="boolean", options={"default":true})
     */
    private $enable;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Doctor", mappedBy="meansPayment")
     */
    private $doctors;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Pharmacy", mappedBy="meansPayment")
     */
    private $pharmacies;

    public function __construct()
    {
        $this->doctors = new ArrayCollection();
        $this->pharmacies = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

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
     * @return Collection|Doctor[]
     */
    public function getDoctors(): Collection
    {
        return $this->doctors;
    }

    public function addDoctor(Doctor $doctor): self
    {
        if (!$this->doctors->contains($doctor)) {
            $this->doctors[] = $doctor;
            $doctor->addMeansPayment($this);
        }

        return $this;
    }

    public function removeDoctor(Doctor $doctor): self
    {
        if ($this->doctors->contains($doctor)) {
            $this->doctors->removeElement($doctor);
            $doctor->removeMeansPayment($this);
        }

        return $this;
    }

    /**
     * @return Collection|Pharmacy[]
     */
    public function getPharmacies(): Collection
    {
        return $this->pharmacies;
    }

    public function addPharmacy(Pharmacy $pharmacy): self
    {
        if (!$this->pharmacies->contains($pharmacy)) {
            $this->pharmacies[] = $pharmacy;
            $pharmacy->addMeansPayment($this);
        }

        return $this;
    }

    public function removePharmacy(Pharmacy $pharmacy): self
    {
        if ($this->pharmacies->contains($pharmacy)) {
            $this->pharmacies->removeElement($pharmacy);
            $pharmacy->removeMeansPayment($this);
        }

        return $this;
    }
    public function __toString(){
        return $this->getNom();

    }
}
