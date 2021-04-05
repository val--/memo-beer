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
     * @ORM\ManyToMany(targetEntity=BeerList::class, mappedBy="beers")
     */
    private $beerLists;

    public function __construct()
    {
        $this->beerLists = new ArrayCollection();
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

    /**
     * @return Collection|BeerList[]
     */
    public function getBeerLists(): Collection
    {
        return $this->beerLists;
    }

    public function addBeerList(BeerList $beerList): self
    {
        if (!$this->beerLists->contains($beerList)) {
            $this->beerLists[] = $beerList;
            $beerList->addBeer($this);
        }

        return $this;
    }

    public function removeBeerList(BeerList $beerList): self
    {
        if ($this->beerLists->removeElement($beerList)) {
            $beerList->removeBeer($this);
        }

        return $this;
    }
}
