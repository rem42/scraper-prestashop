<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class PrestashopImages
{
    /** @var Collection<int, PrestashopImage> */
    private Collection $images;

    public function __construct()
    {
        $this->images = new ArrayCollection();
    }

    /**
     * @return Collection<int, PrestashopImage>
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(PrestashopImage $image): self
    {
        $this->images->add($image);

        return $this;
    }

    public function removeImage(PrestashopImage $image): self
    {
        $this->images->removeElement($image);

        return $this;
    }
}
