<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class PropertySearch {

    /**
     * @var Int|null
     */
    private $maxPrice;

    /**
     * @var Int|null
     * @Assert\Range(min=10, max=400)
     */
    private $minSurface;

    /**
     * @param Int|null $maxPrice
     * @return PropertySearch
     */
    public function setMaxPrice(Int $maxPrice): PropertySearch
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    /**
     * @return Int|null
     */
    public function getMaxPrice(): ?Int
    {
        return $this->maxPrice;
    }

    /**
     * @param Int|null $minSurface
     * @return PropertySearch
     */
    public function setMinSurface(Int $minSurface): PropertySearch
    {
        $this->minSurface = $minSurface;
        return $this;
    }

    /**
     * @return Int|null
     */
    public function getMinSurface(): ?Int
    {
        return $this->minSurface;
    }

}