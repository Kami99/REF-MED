<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LaboratoryRepository")
 */
class Laboratory
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
    private $nameLaboratory;

    /**
     * @ORM\Column(type="integer")
     */
    private $numberPhone;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameLaboratory(): ?string
    {
        return $this->nameLaboratory;
    }

    public function setNameLaboratory(string $nameLaboratory): self
    {
        $this->nameLaboratory = $nameLaboratory;

        return $this;
    }

    public function getNumberPhone(): ?int
    {
        return $this->numberPhone;
    }

    public function setNumberPhone(int $numberPhone): self
    {
        $this->numberPhone = $numberPhone;

        return $this;
    }
}
