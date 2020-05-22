<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;


class PasswordUpdate
{

    private $oldPassword;
    /**
     * @Assert\EqualTo(propertyPath="newPassword", message="Les mots de passe doivent correspondre")
     */
    private $confirmPassword;

    
    /**
     * @Assert\Regex("#^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$#", message="Votre mots de passe doit contenir au moins un chiffre, un lettre Majuscule, miniscule, un caractère spécial avoir au moins 8 caractères")
     * @var string The hashed password
     *@Assert\Length(
     *      min = 8,
     *      max = 4096,
     *      minMessage = "Votre mots de passe doit contenir au moins {{ limit }} charactères",
     *      maxMessage = "Votre mots de passe ne doit pas contenir plus {{ limit }} charactères",
     *      allowEmptyString = false
     * )
     * @ORM\Column(type="string")
     */
    private $newPassword;



    public function getOldPassword(): ?string
    {
        return $this->oldPassword;
    }

    public function setOldPassword(string $oldPassword): self
    {
        $this->oldPassword = $oldPassword;

        return $this;
    }

    public function getConfirmPassword(): ?string
    {
        return $this->confirmPassword;
    }

    public function setConfirmPassword(string $confirmPassword): self
    {
        $this->confirmPassword = $confirmPassword;

        return $this;
    }

    public function getNewPassword(): ?string
    {
        return $this->newPassword;
    }

    public function setNewPassword(string $newPassword): self
    {
        $this->newPassword = $newPassword;

        return $this;
    }
}
