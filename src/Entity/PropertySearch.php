<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
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
     * @var ArrayCollection
     */
    private $options;

    public function __construct()
    {
        $this->options = new ArrayCollection();
    }

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

    /**
     * @return ArrayCollection
     */
    public function getOptions(): ArrayCollection
    {
        return $this->options;
    }

    /**
     * @param ArrayCollection $options
     */
    public function setOptions(ArrayCollection $options): void
    {
        $this->options = $options;
    }



}