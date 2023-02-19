<?php

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopOrderCarrier
{
    private ?int $id = null;

    private ?int $idOrder = null;

    private ?int $idCarrier = null;

    private ?int $idOrderInvoice = null;

    private ?float $weight = null;

    private ?float $shippingCostTaxExcl = null;

    private ?float $shippingCostTaxIncl = null;

    private ?string $trackingNumber = null;

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

    public function getIdOrder(): ?int
    {
        return $this->idOrder;
    }

    public function setIdOrder(?int $idOrder): self
    {
        $this->idOrder = $idOrder;

        return $this;
    }

    public function getIdCarrier(): ?int
    {
        return $this->idCarrier;
    }

    public function setIdCarrier(?int $idCarrier): self
    {
        $this->idCarrier = $idCarrier;

        return $this;
    }

    public function getIdOrderInvoice(): ?int
    {
        return $this->idOrderInvoice;
    }

    public function setIdOrderInvoice(?int $idOrderInvoice): self
    {
        $this->idOrderInvoice = $idOrderInvoice;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getShippingCostTaxExcl(): ?float
    {
        return $this->shippingCostTaxExcl;
    }

    public function setShippingCostTaxExcl(?float $shippingCostTaxExcl): self
    {
        $this->shippingCostTaxExcl = $shippingCostTaxExcl;

        return $this;
    }

    public function getShippingCostTaxIncl(): ?float
    {
        return $this->shippingCostTaxIncl;
    }

    public function setShippingCostTaxIncl(?float $shippingCostTaxIncl): self
    {
        $this->shippingCostTaxIncl = $shippingCostTaxIncl;

        return $this;
    }

    public function getTrackingNumber(): ?string
    {
        return $this->trackingNumber;
    }

    public function setTrackingNumber(?string $trackingNumber): self
    {
        $this->trackingNumber = $trackingNumber;

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
