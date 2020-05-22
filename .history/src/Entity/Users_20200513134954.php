<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 *ORM\@DiscriminatorColumn(name="discr", type="string")
 *@ORM\InheritanceType("JOINED")
 *@ORM\DiscriminatorMap({"users" = "Users", "usersBlog" = "UsersBlog", "pharmacie" = "Pharmacy" , "doctor" = "Doctor" , "laboratoire" = "Laboratory", "admin" = "Admin"})
 * @UniqueEntity(fields={"email"}, message="Un compte existe avec cet E-mail réessayez avec un autre", entityClass="App\Entity\Users")
 */
class Users implements UserInterface, \Serializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**   
     * @Assert\NotBlank
     * @Assert\Email(
     *     message = "Cette Email  '{{ value }}' n'est pas valide.")
     * @ORM\Column(type="string", length=180, unique=true)
     */
    protected $email;

    /**
     * @ORM\Column(type="json")
     */
    protected $roles = [];

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
    protected $password;

    public function __construct()
    {
        $this->roles[]='ROLE_USER';
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
    public function serialize()


}
