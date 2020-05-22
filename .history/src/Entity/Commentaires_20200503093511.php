<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommentairesRepository")
 */
class Commentaires
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $contain;

    /**
     * @ORM\Column(type="boolean", options={"default":true})
     */
    private $active;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Articles", inversedBy="commentaires")
     * @ORM\JoinColumn(nullable=false)
     */
    private $articles;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\UsersBlog", inversedBy="commentaires")
     * @ORM\JoinColumn(nullable=false)
     */
    private $usersBlog;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContain(): ?string
    {
        return $this->contain;
    }

    public function setContain(string $contain): self
    {
        $this->contain = $contain;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

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

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

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

    public function getArticles(): ?Articles
    {
        return $this->articles;
    }

    public function setArticles(?Articles $articles): self
    {
        $this->articles = $articles;

        return $this;
    }

    public function getUsersBlog(): ?UsersBlog
    {
        return $this->usersBlog;
    }

    public function setUsersBlog(?UsersBlog $usersBlog): self
    {
        $this->usersBlog = $usersBlog;

        return $this;
    }
}
