<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopOrderHistory
{
    public ?int $id                     = null;
    public ?string $idEmployee          = null;
    public ?int $idOrderState           = null;
    public ?int $idOrder                = null;
    public ?\DateTimeInterface $dateAdd = null;

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setIdEmployee(?string $idEmployee): self
    {
        $this->idEmployee = $idEmployee;
        return $this;
    }

    public function setIdOrderState(?int $idOrderState): self
    {
        $this->idOrderState = $idOrderState;
        return $this;
    }

    public function setIdOrder(?int $idOrder): self
    {
        $this->idOrder = $idOrder;
        return $this;
    }

    public function setDateAdd(?\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;
        return $this;
    }
}
