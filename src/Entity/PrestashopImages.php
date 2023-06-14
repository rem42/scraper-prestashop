<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopImages
{
    /** @var array<int, PrestashopImage> */
    public array $images = [];

    public function addImage(PrestashopImage $image): self
    {
        $this->images[] = $image;

        return $this;
    }
}
