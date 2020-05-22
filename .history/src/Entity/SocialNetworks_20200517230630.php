<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SocialNetworksRepository")
 */
class SocialNetworks
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * 
     * @ORM\Column(type="string", length=255)
     */
    private $socialName;

    /**
     * @ORM\Column(type="boolean", options={"default":true})
     */
    private $enable;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\DoctorSocialNetworks", mappedBy="SocialNetworks", orphanRemoval=true)
     */
    private $doctorSocialNetworks;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\PharmacySocialNetworks", mappedBy="socialNetworks", orphanRemoval=true)
     */
    private $pharmacySocialNetworks;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LaboratorySocialNetworks", mappedBy="socialNetworks", orphanRemoval=true)
     */
    private $laboratorySocialNetworks;

    public function __construct()
    {
        $this->doctorSocialNetworks = new ArrayCollection();
        $this->pharmacySocialNetworks = new ArrayCollection();
        $this->laboratorySocialNetworks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSocialName(): ?string
    {
        return $this->socialName;
    }

    public function setSocialName(string $socialName): self
    {
        $this->socialName = $socialName;

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
     * @return Collection|DoctorSocialNetworks[]
     */
    public function getDoctorSocialNetworks(): Collection
    {
        return $this->doctorSocialNetworks;
    }

    public function addDoctorSocialNetwork(DoctorSocialNetworks $doctorSocialNetwork): self
    {
        if (!$this->doctorSocialNetworks->contains($doctorSocialNetwork)) {
            $this->doctorSocialNetworks[] = $doctorSocialNetwork;
            $doctorSocialNetwork->setSocialNetworks($this);
        }

        return $this;
    }

    public function removeDoctorSocialNetwork(DoctorSocialNetworks $doctorSocialNetwork): self
    {
        if ($this->doctorSocialNetworks->contains($doctorSocialNetwork)) {
            $this->doctorSocialNetworks->removeElement($doctorSocialNetwork);
            // set the owning side to null (unless already changed)
            if ($doctorSocialNetwork->getSocialNetworks() === $this) {
                $doctorSocialNetwork->setSocialNetworks(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|PharmacySocialNetworks[]
     */
    public function getPharmacySocialNetworks(): Collection
    {
        return $this->pharmacySocialNetworks;
    }

    public function addPharmacySocialNetwork(PharmacySocialNetworks $pharmacySocialNetwork): self
    {
        if (!$this->pharmacySocialNetworks->contains($pharmacySocialNetwork)) {
            $this->pharmacySocialNetworks[] = $pharmacySocialNetwork;
            $pharmacySocialNetwork->setSocialNetworks($this);
        }

        return $this;
    }

    public function removePharmacySocialNetwork(PharmacySocialNetworks $pharmacySocialNetwork): self
    {
        if ($this->pharmacySocialNetworks->contains($pharmacySocialNetwork)) {
            $this->pharmacySocialNetworks->removeElement($pharmacySocialNetwork);
            // set the owning side to null (unless already changed)
            if ($pharmacySocialNetwork->getSocialNetworks() === $this) {
                $pharmacySocialNetwork->setSocialNetworks(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|LaboratorySocialNetworks[]
     */
    public function getLaboratorySocialNetworks(): Collection
    {
        return $this->laboratorySocialNetworks;
    }

    public function addLaboratorySocialNetwork(LaboratorySocialNetworks $laboratorySocialNetwork): self
    {
        if (!$this->laboratorySocialNetworks->contains($laboratorySocialNetwork)) {
            $this->laboratorySocialNetworks[] = $laboratorySocialNetwork;
            $laboratorySocialNetwork->setSocialNetworks($this);
        }

        return $this;
    }

    public function removeLaboratorySocialNetwork(LaboratorySocialNetworks $laboratorySocialNetwork): self
    {
        if ($this->laboratorySocialNetworks->contains($laboratorySocialNetwork)) {
            $this->laboratorySocialNetworks->removeElement($laboratorySocialNetwork);
            // set the owning side to null (unless already changed)
            if ($laboratorySocialNetwork->getSocialNetworks() === $this) {
                $laboratorySocialNetwork->setSocialNetworks(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->getSocialName();
    }


}
