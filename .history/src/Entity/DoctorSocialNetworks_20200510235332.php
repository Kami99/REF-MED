<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DoctorSocialNetworksRepository")
 */
class DoctorSocialNetworks
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
    private $links;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Doctor", inversedBy="doctorSocialNetworks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $doctor;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SocialNetworks", inversedBy="doctorSocialNetworks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $socialNetworks;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDoctor(): ?Doctor
    {
        return $this->doctor;
    }

    public function setDoctor(?Doctor $doctor): self
    {
        $this->doctor = $doctor;

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
    public function __toString(){
        return $this->getLinks();
    }
}
