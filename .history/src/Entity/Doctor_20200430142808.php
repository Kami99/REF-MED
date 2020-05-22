<?php

namespace App\Entity;

use App\Entity\Users;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;


/**
 * @ORM\Entity(repositoryClass="App\Repository\DoctorRepository")
 * @Vich\Uploadable()
 * 
 */
class Doctor extends Users
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
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $LastName;

    /**
     * @ORM\Column(type="integer")
     */
    private $numberPhone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pictureProfil;

        /**
     * @var File|null
     * @Vich\UploadableField(mapping="avatar", fileNameProperty="pictureProfil")
     */

    private $imageFile;


    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $tarifMin;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $tarifMax;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $presentation;

    /**
     * @Gedmo\Slug(fields={"firstName", "LastName"})
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="boolean", options={"default":true})
     */
    private $enable;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Profession", inversedBy="doctor")
     * @ORM\JoinColumn(nullable=false)
     */
    private $profession;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Expertise", inversedBy="doctors")
     */
    private $expertise;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Language", inversedBy="doctors")
     */
    private $language;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Location", inversedBy="doctor", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $location;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\MeansPayment", inversedBy="doctors")
     */
    private $meansPayment;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\SocialNetworks", inversedBy="doctors")
     */
    private $socialNetwork;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\PraticalInfos", inversedBy="doctors")
     */
    private $praticalInfos;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Refund", inversedBy="doctors")
     */
    private $refund;

    public function __construct()
    {
        parent::__construct();
        $this->expertise = new ArrayCollection();
        $this->language = new ArrayCollection();
        $this->meansPayment = new ArrayCollection();
        $this->socialNetwork = new ArrayCollection();
        $this->praticalInfos = new ArrayCollection();
        $this->refund = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    public function setLastName(string $LastName): self
    {
        $this->LastName = $LastName;

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

    public function getPictureProfil(): ?string
    {
        return $this->pictureProfil;
    }

    public function setPictureProfil(?string $pictureProfil): self
    {
        $this->pictureProfil = $pictureProfil;

        return $this;
    }

    public function getTarifMin(): ?float
    {
        return $this->tarifMin;
    }

    public function setTarifMin(float $tarifMin): self
    {
        $this->tarifMin = $tarifMin;

        return $this;
    }

    public function getTarifMax(): ?float
    {
        return $this->tarifMax;
    }

    public function setTarifMax(float $tarifMax): self
    {
        $this->tarifMax = $tarifMax;

        return $this;
    }

    public function getPresentation(): ?string
    {
        return $this->presentation;
    }

    public function setPresentation(string $presentation): self
    {
        $this->presentation = $presentation;

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

    public function getProfession(): ?Profession
    {
        return $this->profession;
    }

    public function setProfession(?Profession $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * @return Collection|Expertise[]
     */
    public function getExpertise(): Collection
    {
        return $this->expertise;
    }

    public function addExpertise(Expertise $expertise): self
    {
        if (!$this->expertise->contains($expertise)) {
            $this->expertise[] = $expertise;
        }

        return $this;
    }

    public function removeExpertise(Expertise $expertise): self
    {
        if ($this->expertise->contains($expertise)) {
            $this->expertise->removeElement($expertise);
        }

        return $this;
    }

    /**
     * @return Collection|Language[]
     */
    public function getLanguage(): Collection
    {
        return $this->language;
    }

    public function addLanguage(Language $language): self
    {
        if (!$this->language->contains($language)) {
            $this->language[] = $language;
        }

        return $this;
    }

    public function removeLanguage(Language $language): self
    {
        if ($this->language->contains($language)) {
            $this->language->removeElement($language);
        }

        return $this;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function setLocation(Location $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return Collection|MeansPayment[]
     */
    public function getMeansPayment(): Collection
    {
        return $this->meansPayment;
    }

    public function addMeansPayment(MeansPayment $meansPayment): self
    {
        if (!$this->meansPayment->contains($meansPayment)) {
            $this->meansPayment[] = $meansPayment;
        }

        return $this;
    }

    public function removeMeansPayment(MeansPayment $meansPayment): self
    {
        if ($this->meansPayment->contains($meansPayment)) {
            $this->meansPayment->removeElement($meansPayment);
        }

        return $this;
    }

    /**
     * @return Collection|SocialNetworks[]
     */
    public function getSocialNetwork(): Collection
    {
        return $this->socialNetwork;
    }

    public function addSocialNetwork(SocialNetworks $socialNetwork): self
    {
        if (!$this->socialNetwork->contains($socialNetwork)) {
            $this->socialNetwork[] = $socialNetwork;
        }

        return $this;
    }

    public function removeSocialNetwork(SocialNetworks $socialNetwork): self
    {
        if ($this->socialNetwork->contains($socialNetwork)) {
            $this->socialNetwork->removeElement($socialNetwork);
        }

        return $this;
    }

    /**
     * @return Collection|PraticalInfos[]
     */
    public function getPraticalInfos(): Collection
    {
        return $this->praticalInfos;
    }

    public function addPraticalInfo(PraticalInfos $praticalInfo): self
    {
        if (!$this->praticalInfos->contains($praticalInfo)) {
            $this->praticalInfos[] = $praticalInfo;
        }

        return $this;
    }

    public function removePraticalInfo(PraticalInfos $praticalInfo): self
    {
        if ($this->praticalInfos->contains($praticalInfo)) {
            $this->praticalInfos->removeElement($praticalInfo);
        }

        return $this;
    }

    /**
     * @return Collection|Refund[]
     */
    public function getRefund(): Collection
    {
        return $this->refund;
    }

    public function addRefund(Refund $refund): self
    {
        if (!$this->refund->contains($refund)) {
            $this->refund[] = $refund;
        }

        return $this;
    }

    public function removeRefund(Refund $refund): self
    {
        if ($this->refund->contains($refund)) {
            $this->refund->removeElement($refund);
        }

        return $this;
    }

     /**
     * Get the value of fileName
     *
     * @return  string|null
     */ 
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set the value of fileName
     *
     * @param  string|null  $fileName
     *
     * @return  self
     */ 
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;

    }

    /**
     * Get the value of imageFile
     */ 
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * Set the value of imageFile
     *
     * @return  self
     */ 
    public function setImageFile($imageFile)
    {
        $this->imageFile = $imageFile;
        if($this->imageFile instanceof UploadedFile)
        {
            $this->updatedAt = new \DateTime('now');

        }

        return $this;
    }

}
