<?php

namespace App\Entity;

use App\Repository\BeerListRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * A list containing "BeerListItems"
 * @ORM\Entity(repositoryClass=BeerListRepository::class)
 */
class BeerList
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $note;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updated_at;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="beerLists")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity=BeerListItem::class, mappedBy="BeerList", orphanRemoval=true)
     */
    private $beerListItems;

    public function __construct()
    {
        $this->beerListItems = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection|BeerListItem[]
     */
    public function getBeerListItems(): Collection
    {
        return $this->beerListItems;
    }

    public function addBeerListItem(BeerListItem $beerListItem): self
    {
        if (!$this->beerListItems->contains($beerListItem)) {
            $this->beerListItems[] = $beerListItem;
            $beerListItem->setBeerList($this);
        }

        return $this;
    }

    public function removeBeerListItem(BeerListItem $beerListItem): self
    {
        if ($this->beerListItems->removeElement($beerListItem)) {
            // set the owning side to null (unless already changed)
            if ($beerListItem->getBeerList() === $this) {
                $beerListItem->setBeerList(null);
            }
        }

        return $this;
    }

}
