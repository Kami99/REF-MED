<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MembersRepository")
 */
class Members
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
    private $membersName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $membersLastName;

    /**
     * @ORM\Column(type="text")
     */
    private $membersDescription;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $poste;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMembersName(): ?string
    {
        return $this->membersName;
    }

    public function setMembersName(string $membersName): self
    {
        $this->membersName = $membersName;

        return $this;
    }

    public function getMembersLastName(): ?string
    {
        return $this->membersLastName;
    }

    public function setMembersLastName(string $membersLastName): self
    {
        $this->membersLastName = $membersLastName;

        return $this;
    }

    public function getMembersDescription(): ?string
    {
        return $this->membersDescription;
    }

    public function setMembersDescription(string $membersDescription): self
    {
        $this->membersDescription = $membersDescription;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getPoste(): ?string
    {
        return $this->poste;
    }

    public function setPoste(string $poste): self
    {
        $this->poste = $poste;

        return $this;
    }
}
