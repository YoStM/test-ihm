<?php

namespace App\Entity;

use App\Repository\AccountRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AccountRepository::class)]
class Account
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 13)]
    private $acc_number;

    #[ORM\Column(type: 'integer')]
    private $balance;

    #[ORM\Column(type: 'boolean')]
    private $is_favorite;

    #[ORM\ManyToOne(targetEntity: Bank::class, inversedBy: 'accounts')]
    #[ORM\JoinColumn(nullable: false)]
    private $bank_id;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'accounts')]
    #[ORM\JoinColumn(nullable: false)]
    private $user_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAccNumber(): ?string
    {
        return $this->acc_number;
    }

    public function setAccNumber(string $acc_number): self
    {
        $this->acc_number = $acc_number;

        return $this;
    }

    public function getBalance(): ?int
    {
        return $this->balance;
    }

    public function setBalance(int $balance): self
    {
        $this->balance = $balance;

        return $this;
    }

    public function getIsFavorite(): ?bool
    {
        return $this->is_favorite;
    }

    public function setIsFavorite(bool $is_favorite): self
    {
        $this->is_favorite = $is_favorite;

        return $this;
    }

    public function getBank(): ?Bank
    {
        return $this->bank_id;
    }

    public function setBank(?Bank $bank_id): self
    {
        $this->bank_id = $bank_id;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->user_id;
    }

    public function setUserId(?User $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }
}
