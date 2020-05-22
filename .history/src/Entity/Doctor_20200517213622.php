<?php

namespace App\Entity;
use App\Entity\Users;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;



/**
 * @Vich\Uploadable()
 * @ORM\Entity(repositoryClass="App\Repository\DoctorRepository")
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
     * @Assert\Regex("#^[a-zA-Z]{3,120}.*[\s\.]*$#", message="Elle ne doit pas contenir de caractères spéciaux ou de chiffres et doit avoir minimum 2 caractères")
     * 
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @Assert\Regex("#^[a-zA-Z]{3,120}.*[\s\.]*$#", message="Ce champ ne doit pas contenir de caractères spéciaux ou de chiffres")
     *@ORM\Column(type="string", length=255)
     */
    private $LastName;

    /**
     * @Assert\Regex("#^\+(221)-[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}$#", message="Votre numéro doit suivre ce format : +221-(77/76/70)-000-00-00")
     * @ORM\Column(type="string", length=255)
     */
    private $numberPhone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pictureProfil;
   
    /**
     * @var File|null
     * @Vich\UploadableField(mapping="pictureProfile", fileNameProperty="pictureProfil")
     */
    private $imageFile;
    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $tarifMin;

    /**
     * @Assert\GreaterThan(propertyPath="tarifMin", message="Le tarif maximum doit être supérieur au tarif minimum")
     * @ORM\Column(type="float", nullable=true)
     */
    private $tarifMax;

    /**
    *@Assert\Length(
     *      min = 15,
     *      minMessage = "Votre présentation doit faire au moins {{ limit }} mots",
     * )
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
    private $enable=true;

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
     * @ORM\ManyToMany(targetEntity="App\Entity\PraticalInfos", inversedBy="doctors")
     */
    private $praticalInfos;


    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Refund", inversedBy="doctors")
     */
    private $refund;

    /**
     * @var \DateTime $updatedAt
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;
    /**
     * @var \DateTime $createdAt
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\DoctorSocialNetworks", mappedBy="doctor", orphanRemoval=true)
     */
    private $doctorSocialNetworks;

    public function __construct()
    {
        parent::__construct();
        $this->expertise = new ArrayCollection();
        $this->language = new ArrayCollection();
        $this->meansPayment = new ArrayCollection();
        $this->praticalInfos = new ArrayCollection();
        $this->refund = new ArrayCollection();
        $this->doctorSocialNetworks = new ArrayCollection();
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

    public function getNumberPhone(): ?string
    {
        return $this->numberPhone;
    }

    public function setNumberPhone(string $numberPhone): self
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

    public function getFullTarif(): ?string
    {
        $this->tarifMax=number_format($this->tarifMax , 0 ," "," ");
        $this->tarifMin=number_format($this->tarifMin , 0 ," "," ");
       return "{$this->tarifMin} CFA - {$this->tarifMax} CFA";
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
    public function getFullName(){
        return "{$this->firstName} {$this->LastName}";
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

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return Collection|DoctorSocialNetworks[]
     */
    public function getDoctorSocialNetworks(): Collection
    {
        return $this->doctorSocialNetworks;
    }

    public function addDoctorSocialNetwork(DoctorSocialNetworks $doctorSocialNetwork): self
    {
        if (!$this->doctorSocialNetworks->contains($doctorSocialNetwork)) {
            $this->doctorSocialNetworks[] = $doctorSocialNetwork;
            $doctorSocialNetwork->setDoctor($this);
        }

        return $this;
    }

    public function removeDoctorSocialNetwork(DoctorSocialNetworks $doctorSocialNetwork): self
    {
        if ($this->doctorSocialNetworks->contains($doctorSocialNetwork)) {
            $this->doctorSocialNetworks->removeElement($doctorSocialNetwork);
            // set the owning side to null (unless already changed)
            if ($doctorSocialNetwork->getDoctor() === $this) {
                $doctorSocialNetwork->setDoctor(null);
            }
        }

        return $this;
    }
    public function __toString(){
        return $this->getFullName();
    }

}
