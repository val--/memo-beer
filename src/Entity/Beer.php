<?php

namespace App\Entity;

use App\Repository\BeerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BeerRepository::class)
 */
class Beer
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
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\OneToMany(targetEntity=BeerListItem::class, mappedBy="beer", orphanRemoval=true)
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

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

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
            $beerListItem->setBeer($this);
        }

        return $this;
    }

    public function removeBeerListItem(BeerListItem $beerListItem): self
    {
        if ($this->beerListItems->removeElement($beerListItem)) {
            // set the owning side to null (unless already changed)
            if ($beerListItem->getBeer() === $this) {
                $beerListItem->setBeer(null);
            }
        }

        return $this;
    }
}
