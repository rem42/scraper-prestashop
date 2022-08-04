<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopGroup
{
    public ?int $id = null;

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
}
