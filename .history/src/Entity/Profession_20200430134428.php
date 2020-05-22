<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProfessionRepository")
 */
class Profession
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
    private $professionName;

    /**
     * @Gedmo\Slug(fields={"professionName"})
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="boolean", options={"default":true})
     */
    private $enable;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Doctor", mappedBy="profession", orphanRemoval=true)
     */
    private $doctor;

    public function __construct()
    {
        $this->doctor = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProfessionName(): ?string
    {
        return $this->professionName;
    }

    public function setProfessionName(string $professionName): self
    {
        $this->professionName = $professionName;

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

    /**
     * @return Collection|Doctor[]
     */
    public function getDoctor(): Collection
    {
        return $this->doctor;
    }

    public function addDoctor(Doctor $doctor): self
    {
        if (!$this->doctor->contains($doctor)) {
            $this->doctor[] = $doctor;
            $doctor->setProfession($this);
        }

        return $this;
    }

    public function removeDoctor(Doctor $doctor): self
    {
        if ($this->doctor->contains($doctor)) {
            $this->doctor->removeElement($doctor);
            // set the owning side to null (unless already changed)
            if ($doctor->getProfession() === $this) {
                $doctor->setProfession(null);
            }
        }

        return $this;
    }
    public function __toString(){
        return $this->getProfessionName();

    }
}
