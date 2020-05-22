<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LaboratorySocialNetworksRepository")
 */
class LaboratorySocialNetworks
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Laboratory", inversedBy="laboratorySocialNetworks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $laboratory;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SocialNetworks", inversedBy="laboratorySocialNetworks")
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

    public function getLaboratory(): ?Laboratory
    {
        return $this->laboratory;
    }

    public function setLaboratory(?Laboratory $laboratory): self
    {
        $this->laboratory = $laboratory;

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
