<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PharmacySocialNetworksRepository")
 */
class PharmacySocialNetworks
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
    private $link;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pharmacy", inversedBy="pharmacySocialNetworks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Pharmacy;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SocialNetworks", inversedBy="pharmacySocialNetworks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $socialNetworks;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getPharmacy(): ?Pharmacy
    {
        return $this->Pharmacy;
    }

    public function setPharmacy(?Pharmacy $Pharmacy): self
    {
        $this->Pharmacy = $Pharmacy;

        return $this;
    }

    public function getSocialNetworks(): ?SocialNetworks
    {
        return $this->socialNetworks;
    }

    public function setSocialNetworks(?SocialNetworks $socialNetworks): self
    {
        $this->socialNetworks = $socialNetworks;

        return $this;
    }
}
