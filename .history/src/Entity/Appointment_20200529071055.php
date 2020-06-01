<?php

namespace App\Entity;

use App\Repository\AppointmentRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AppointmentRepository::class)
 */
class Appointment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\GreaterThan("today")
     * @ORM\Column(type="datetime")
     */
    private $beginAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $endAt;

    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $daysOfWeek = [];

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isConfirmed;

    /**
     * @ORM\ManyToOne(targetEntity=AppointmentType::class, inversedBy="appointments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $appointmentType;

    /**
     * @ORM\ManyToMany(targetEntity=Doctor::class, mappedBy="appointement")
     */
    private $doctors;

    /**
     * @Assert\Regex("#^[a-zA-Z]{3,120}.*[\s\.]*$#", message="Elle ne doit pas contenir de caractères spéciaux ou de chiffres et doit avoir minimum 2 caractères") 
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @Assert\Regex("#^\+(221)-[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}$#", message="Votre numéro doit suivre ce format : +221-(77/76/70)-000-00-00")
     * @ORM\Column(type="string", length=255)
     */
    private $tel;

    public function __construct()
    {
        $this->doctors = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBeginAt(): ?\DateTimeInterface
    {
        return $this->beginAt;
    }

    public function setBeginAt(\DateTimeInterface $beginAt): self
    {
        $this->beginAt = $beginAt;

        return $this;
    }

    public function getEndAt(): ?\DateTimeInterface
    {
        return $this->endAt;
    }

    public function setEndAt(?\DateTimeInterface $endAt): self
    {
        $this->endAt = $endAt;

        return $this;
    }

    public function getDaysOfWeek(): ?array
    {
        return $this->daysOfWeek;
    }

    public function setDaysOfWeek(?array $daysOfWeek): self
    {
        $this->daysOfWeek = $daysOfWeek;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getIsConfirmed(): ?bool
    {
        return $this->isConfirmed;
    }

    public function setIsConfirmed(bool $isConfirmed): self
    {
        $this->isConfirmed = $isConfirmed;

        return $this;
    }

    public function getAppointmentType(): ?AppointmentType
    {
        return $this->appointmentType;
    }

    public function setAppointmentType(?AppointmentType $appointmentType): self
    {
        $this->appointmentType = $appointmentType;

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
            $doctor->addAppointement($this);
        }

        return $this;
    }

    public function removeDoctor(Doctor $doctor): self
    {
        if ($this->doctors->contains($doctor)) {
            $this->doctors->removeElement($doctor);
            $doctor->removeAppointement($this);
        }

        return $this;
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

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }
    public function __toString()
    {
        return $this->getTitle();
    }
}
