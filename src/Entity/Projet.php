<?php

namespace App\Entity;

use App\Repository\ProjetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjetRepository::class)
 */
class Projet
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $langcode;

    /**
     * @ORM\ManyToOne(targetEntity=user::class, inversedBy="user")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLangcode(): ?string
    {
        return $this->langcode;
    }

    public function setLangcode(?string $langcode): self
    {
        $this->langcode = $langcode;

        return $this;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): self
    {
        $this->user = $user;

        return $this;
    }
}
