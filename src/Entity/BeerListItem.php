<?php

namespace App\Entity;

use App\Repository\BeerListItemRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * A BeerListItem relates to a "Beer"
 * @ORM\Entity(repositoryClass=BeerListItemRepository::class)
 */
class BeerListItem
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=BeerList::class, inversedBy="beerListItems")
     * @ORM\JoinColumn(nullable=false)
     */
    private $BeerList;

    /**
     * @ORM\ManyToOne(targetEntity=Beer::class, inversedBy="beerListItems")
     * @ORM\JoinColumn(nullable=false)
     */
    private $beer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBeerList(): ?BeerList
    {
        return $this->BeerList;
    }

    public function setBeerList(?BeerList $BeerList): self
    {
        $this->BeerList = $BeerList;

        return $this;
    }

    public function getBeer(): ?Beer
    {
        return $this->beer;
    }

    public function setBeer(?Beer $beer): self
    {
        $this->beer = $beer;

        return $this;
    }
}
