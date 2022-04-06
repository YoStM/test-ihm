<?php

namespace App\Entity;

use App\Repository\TransactionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TransactionRepository::class)]
class Transaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime_immutable')]
    private $created_at;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private $modified_at;

    #[ORM\Column(type: 'integer')]
    private $transaction_type;

    #[ORM\Column(type: 'boolean')]
    private $is_monthly;

    #[ORM\Column(type: 'boolean')]
    private $is_verified;

    #[ORM\Column(type: 'string', length: 75, nullable: true)]
    private $description;

    #[ORM\Column(type: 'integer')]
    private $amount;

    #[ORM\Column(type: 'integer')]
    private $payment_method;

    #[ORM\Column(type: 'integer')]
    private $category_id;

    #[ORM\Column(type: 'integer')]
    private $company_id;

    #[ORM\Column(type: 'integer')]
    private $account_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getModifiedAt(): ?\DateTimeImmutable
    {
        return $this->modified_at;
    }

    public function setModifiedAt(?\DateTimeImmutable $modified_at): self
    {
        $this->modified_at = $modified_at;

        return $this;
    }

    public function getTransactionType(): ?int
    {
        return $this->transaction_type;
    }

    public function setTransactionType(int $transaction_type): self
    {
        $this->transaction_type = $transaction_type;

        return $this;
    }

    public function getIsMonthly(): ?bool
    {
        return $this->is_monthly;
    }

    public function setIsMonthly(bool $is_monthly): self
    {
        $this->is_monthly = $is_monthly;

        return $this;
    }

    public function getIsVerified(): ?bool
    {
        return $this->is_verified;
    }

    public function setIsVerified(bool $is_verified): self
    {
        $this->is_verified = $is_verified;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getPaymentMethod(): ?int
    {
        return $this->payment_method;
    }

    public function setPaymentMethod(int $payment_method): self
    {
        $this->payment_method = $payment_method;

        return $this;
    }

    public function getCategoryId(): ?int
    {
        return $this->category_id;
    }

    public function setCategoryId(int $category_id): self
    {
        $this->category_id = $category_id;

        return $this;
    }

    public function getCompanyId(): ?int
    {
        return $this->company_id;
    }

    public function setCompanyId(int $company_id): self
    {
        $this->company_id = $company_id;

        return $this;
    }

    public function getAccountId(): ?int
    {
        return $this->account_id;
    }

    public function setAccountId(int $account_id): self
    {
        $this->account_id = $account_id;

        return $this;
    }
}
