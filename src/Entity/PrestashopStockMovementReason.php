<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopStockMovementReason
{
    public ?int $id                     = null;
    public ?string $sign                = null;
    public ?int $deleted                = null;
    public ?\DateTimeInterface $dateAdd = null;
    public ?\DateTimeInterface $dateUpd = null;
    public ?string $name                = null;

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setSign(?string $sign): self
    {
        $this->sign = $sign;
        return $this;
    }

    public function setDeleted(?int $deleted): self
    {
        $this->deleted = $deleted;
        return $this;
    }

    public function setDateAdd(?\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;
        return $this;
    }

    public function setDateUpd(?\DateTimeInterface $dateUpd): self
    {
        $this->dateUpd = $dateUpd;
        return $this;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
