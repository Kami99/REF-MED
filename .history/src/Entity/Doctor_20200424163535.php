<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * @ORM\Entity(repositoryClass="App\Repository\DoctorRepository")
 */
class Doctor extends Users
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
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $LastName;

    /**
     * @ORM\Column(type="integer")
     */
    private $numberPhone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pictureProfil;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $tarifMin;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $tarifMax;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $presentation;

    /**
     * @Gedmo\Slug(fields={"firstName", "LastName"})
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="boolean", options={"default":true})
     */
    private $enable;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    public function setLastName(string $LastName): self
    {
        $this->LastName = $LastName;

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

    public function getPictureProfil(): ?string
    {
        return $this->pictureProfil;
    }

    public function setPictureProfil(?string $pictureProfil): self
    {
        $this->pictureProfil = $pictureProfil;

        return $this;
    }

    public function getTarifMin(): ?float
    {
        return $this->tarifMin;
    }

    public function setTarifMin(float $tarifMin): self
    {
        $this->tarifMin = $tarifMin;

        return $this;
    }

    public function getTarifMax(): ?float
    {
        return $this->tarifMax;
    }

    public function setTarifMax(float $tarifMax): self
    {
        $this->tarifMax = $tarifMax;

        return $this;
    }

    public function getPresentation(): ?string
    {
        return $this->presentation;
    }

    public function setPresentation(string $presentation): self
    {
        $this->presentation = $presentation;

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
}
