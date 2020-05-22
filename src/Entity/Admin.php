<?php

namespace App\Entity;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Users;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdminRepository")
 */
class Admin extends Users
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\Regex("#^[a-zA-Z]{2,120}$#", message="Elle ne doit pas contenir de caractères spéciaux ou de chiffres et doit avoir minimum 2 caractères")
     * 
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @Assert\Regex("#^[a-zA-Z]{2,120}$#", message="Elle ne doit pas contenir de caractères spéciaux ou de chiffres et doit avoir minimum 2 caractères")
     * 
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;
    
    /**
     * @Assert\Regex("#^\+(221)-[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}$#", message="Votre numéro doit suivre ce format : +221-(77/76/70)-000-00-00")
     * @ORM\Column(type="string", length=255)
     */
    private $phoneNumber;

    /**
     * @ORM\Column(type="boolean")
     */
    private $enable;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

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
