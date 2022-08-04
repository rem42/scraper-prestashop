<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopItem
{
    public ?int $id;
    public ?string $value;

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }
}
