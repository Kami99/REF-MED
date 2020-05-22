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
     * @ORM\Column(type="string", length=255)
     */
    private $links;

    /**
     * @Gedmo\Slug(fields={"socialName"})
     * 
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    public function __construct()
    {
        $this->doctors = new ArrayCollection();
        $this->laboratories = new ArrayCollection();
        $this->pharmacies = new ArrayCollection();
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

    public function getLinks(): ?string
    {
        return $this->links;
    }

    public function setLinks(string $links): self
    {
        $this->links = $links;

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
            $doctor->addSocialNetwork($this);
        }

        return $this;
    }

    public function removeDoctor(Doctor $doctor): self
    {
        if ($this->doctors->contains($doctor)) {
            $this->doctors->removeElement($doctor);
            $doctor->removeSocialNetwork($this);
        }

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
            $laboratory->addSocialNetwork($this);
        }

        return $this;
    }

    public function removeLaboratory(Laboratory $laboratory): self
    {
        if ($this->laboratories->contains($laboratory)) {
            $this->laboratories->removeElement($laboratory);
            $laboratory->removeSocialNetwork($this);
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
            $pharmacy->addSocialNetwork($this);
        }

        return $this;
    }

    public function removePharmacy(Pharmacy $pharmacy): self
    {
        if ($this->pharmacies->contains($pharmacy)) {
            $this->pharmacies->removeElement($pharmacy);
            $pharmacy->removeSocialNetwork($this);
        }

        return $this;
    }
}
