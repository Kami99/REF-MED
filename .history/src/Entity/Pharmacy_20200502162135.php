<?php

namespace App\Entity;

use App\Entity\Users;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * @Vich\Uploadable()
 * @ORM\Entity(repositoryClass="App\Repository\PharmacyRepository")
 */
class Pharmacy extends Users
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
    private $pharmacyName;

    /**
     * @Assert\Length(min = 12, max = 12, minMessage = "min_lenght", maxMessage = "max_lenght")
     * 
     * @ORM\Column(type="string", length=255)
     */
    private $phoneNumber;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @Gedmo\Slug(fields={"pharmacyName"})
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * 
     * @ORM\Column(type="boolean", options={"default":true})
     */
    private $enable=true;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\PharmacyAvailabeDrugs", mappedBy="pharmacy", orphanRemoval=true)
     */
    private $pharmacyAvailabeDrugs;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\MeansPayment", inversedBy="pharmacies")
     */
    private $meansPayment;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\SocialNetworks", inversedBy="pharmacies")
     */
    private $socialNetworks;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Location", inversedBy="pharmacy", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $location;

    /**
     * @var \DateTime $createdAt
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;
    /**
     * @var File|null
     * @Vich\UploadableField(mapping="pharmacyPicture", fileNameProperty="picture")
     */
    private $imageFile;
    

    public function __construct()
    {
        parent::__construct();
        $this->pharmacyAvailabeDrugs = new ArrayCollection();
        $this->meansPayment = new ArrayCollection();
        $this->socialNetworks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPharmacyName(): ?string
    {
        return $this->pharmacyName;
    }

    public function setPharmacyName(string $pharmacyName): self
    {
        $this->pharmacyName = $pharmacyName;

        return $this;
    }

    public function getPhoneNumber(): ?int
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(int $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

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
     * @return Collection|PharmacyAvailabeDrugs[]
     */
    public function getPharmacyAvailabeDrugs(): Collection
    {
        return $this->pharmacyAvailabeDrugs;
    }

    public function addPharmacyAvailabeDrug(PharmacyAvailabeDrugs $pharmacyAvailabeDrug): self
    {
        if (!$this->pharmacyAvailabeDrugs->contains($pharmacyAvailabeDrug)) {
            $this->pharmacyAvailabeDrugs[] = $pharmacyAvailabeDrug;
            $pharmacyAvailabeDrug->setPharmacy($this);
        }

        return $this;
    }

    public function removePharmacyAvailabeDrug(PharmacyAvailabeDrugs $pharmacyAvailabeDrug): self
    {
        if ($this->pharmacyAvailabeDrugs->contains($pharmacyAvailabeDrug)) {
            $this->pharmacyAvailabeDrugs->removeElement($pharmacyAvailabeDrug);
            // set the owning side to null (unless already changed)
            if ($pharmacyAvailabeDrug->getPharmacy() === $this) {
                $pharmacyAvailabeDrug->setPharmacy(null);
            }
        }

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
    public function getSocialNetworks(): Collection
    {
        return $this->socialNetworks;
    }

    public function addSocialNetwork(SocialNetworks $socialNetwork): self
    {
        if (!$this->socialNetworks->contains($socialNetwork)) {
            $this->socialNetworks[] = $socialNetwork;
        }

        return $this;
    }

    public function removeSocialNetwork(SocialNetworks $socialNetwork): self
    {
        if ($this->socialNetworks->contains($socialNetwork)) {
            $this->socialNetworks->removeElement($socialNetwork);
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
