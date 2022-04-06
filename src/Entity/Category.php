<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 85)]
    private $label;

    #[ORM\OneToMany(mappedBy: 'category_id', targetEntity: BudgetObjective::class, orphanRemoval: true)]
    private $categories;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return Collection<int, BudgetObjective>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategories(BudgetObjective $categories): self
    {
        if (!$this->categories->contains($categories)) {
            $this->categories[] = $categories;
            $categories->setCategoryId($this);
        }

        return $this;
    }

    public function removeCategories(BudgetObjective $categories): self
    {
        if ($this->categories->removeElement($categories)) {
            // set the owning side to null (unless already changed)
            if ($categories->getCategoryId() === $this) {
                $categories->setCategoryId(null);
            }
        }

        return $this;
    }
}
