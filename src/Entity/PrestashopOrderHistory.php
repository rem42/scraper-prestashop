<?php

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopOrderHistory
{
    private ?int $id = null;

    private ?string $idEmployee = null;

    private ?int $idOrderState = null;

    private ?int $idOrder = null;

    private ?\DateTimeInterface $dateAdd = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIdEmployee(): ?string
    {
        return $this->idEmployee;
    }

    public function setIdEmployee(?string $idEmployee): self
    {
        $this->idEmployee = $idEmployee;

        return $this;
    }

    public function getIdOrderState(): ?int
    {
        return $this->idOrderState;
    }

    public function setIdOrderState(?int $idOrderState): self
    {
        $this->idOrderState = $idOrderState;

        return $this;
    }

    public function getIdOrder(): ?int
    {
        return $this->idOrder;
    }

    public function setIdOrder(?int $idOrder): self
    {
        $this->idOrder = $idOrder;

        return $this;
    }

    public function getDateAdd(): ?\DateTimeInterface
    {
        return $this->dateAdd;
    }

    public function setDateAdd(?\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }
}
