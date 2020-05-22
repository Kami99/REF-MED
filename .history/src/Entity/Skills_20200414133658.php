<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SkillsRepository")
 */
class Skills
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
    private $titleSkills;

    /**
     * @ORM\Column(type="integer")
     */
    private $percentSkills;

    /**
     * @ORM\Column(type="boolean")
     */
    private $enable;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleSkills(): ?string
    {
        return $this->titleSkills;
    }

    public function setTitleSkills(string $titleSkills): self
    {
        $this->titleSkills = $titleSkills;

        return $this;
    }

    public function getPercentSkills(): ?int
    {
        return $this->percentSkills;
    }

    public function setPercentSkills(int $percentSkills): self
    {
        $this->percentSkills = $percentSkills;

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
