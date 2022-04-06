<?php

namespace App\Entity;

use App\Repository\BudgetObjectiveRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BudgetObjectiveRepository::class)]
class BudgetObjective
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $budget_statut;

    #[ORM\Column(type: 'integer')]
    private $baseline_amount;

    #[ORM\ManyToOne(targetEntity: Category::class, inversedBy: 'categories')]
    #[ORM\JoinColumn(nullable: false)]
    private $category_id;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'budget_objectives')]
    #[ORM\JoinColumn(nullable: false)]
    private $user_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBudgetStatut(): ?int
    {
        return $this->budget_statut;
    }

    public function setBudgetStatut(int $budget_statut): self
    {
        $this->budget_statut = $budget_statut;

        return $this;
    }

    public function getBaselineAmount(): ?int
    {
        return $this->baseline_amount;
    }

    public function setBaselineAmount(int $baseline_amount): self
    {
        $this->baseline_amount = $baseline_amount;

        return $this;
    }

    public function getCategoryId(): ?Category
    {
        return $this->category_id;
    }

    public function setCategoryId(?Category $category_id): self
    {
        $this->category_id = $category_id;

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
