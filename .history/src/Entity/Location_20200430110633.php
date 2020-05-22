<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LocationRepository")
 */
class Location
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
    private $nameLocation;

    /**
     *  @Gedmo\Slug(fields={"nameLocation"})
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $latitude;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $longitude;

    /**
     * @ORM\Column(type="boolean", options={"default":true})
     */
    private $enable;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Doctor", mappedBy="location", cascade={"persist", "remove"})
     */
    private $doctor;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Laboratory", mappedBy="location", cascade={"persist", "remove"})
     */
    private $laboratory;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Pharmacy", mappedBy="location", cascade={"persist", "remove"})
     */
    private $pharmacy;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameLocation(): ?string
    {
        return $this->nameLocation;
    }

    public function setNameLocation(string $nameLocation): self
    {
        $this->nameLocation = $nameLocation;

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

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(?float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(?float $longitude): self
    {
        $this->longitude = $longitude;

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

    public function getDoctor(): ?Doctor
    {
        return $this->doctor;
    }

    public function setDoctor(Doctor $doctor): self
    {
        $this->doctor = $doctor;

        // set the owning side of the relation if necessary
        if ($doctor->getLocation() !== $this) {
            $doctor->setLocation($this);
        }

        return $this;
    }

    public function getLaboratory(): ?Laboratory
    {
        return $this->laboratory;
    }

    public function setLaboratory(Laboratory $laboratory): self
    {
        $this->laboratory = $laboratory;

        // set the owning side of the relation if necessary
        if ($laboratory->getLocation() !== $this) {
            $laboratory->setLocation($this);
        }

        return $this;
    }

    public function getPharmacy(): ?Pharmacy
    {
        return $this->pharmacy;
    }

    public function setPharmacy(Pharmacy $pharmacy): self
    {
        $this->pharmacy = $pharmacy;

        // set the owning side of the relation if necessary
        if ($pharmacy->getLocation() !== $this) {
            $pharmacy->setLocation($this);
        }

        return $this;
    }
}
