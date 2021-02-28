<?php

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopStockMovementReason
{
    private ?int $id = null;

    private ?string $sign = null;

    private ?int $deleted = null;

    private ?\DateTimeInterface $dateAdd = null;

    private ?\DateTimeInterface $dateUpd = null;

    private ?string $name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return PrestashopStockMovementReason
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getSign(): ?string
    {
        return $this->sign;
    }

    /**
     * @return PrestashopStockMovementReason
     */
    public function setSign(?string $sign): self
    {
        $this->sign = $sign;

        return $this;
    }

    public function getDeleted(): ?int
    {
        return $this->deleted;
    }

    /**
     * @return PrestashopStockMovementReason
     */
    public function setDeleted(?int $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }

    public function getDateAdd(): ?\DateTimeInterface
    {
        return $this->dateAdd;
    }

    /**
     * @return PrestashopStockMovementReason
     */
    public function setDateAdd(?\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    public function getDateUpd(): ?\DateTimeInterface
    {
        return $this->dateUpd;
    }

    /**
     * @return PrestashopStockMovementReason
     */
    public function setDateUpd(?\DateTimeInterface $dateUpd): self
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return PrestashopStockMovementReason
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
