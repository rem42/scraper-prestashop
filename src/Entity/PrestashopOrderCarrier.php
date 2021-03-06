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

    /**
     * @return PrestashopOrderCarrier
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIdOrder(): ?int
    {
        return $this->idOrder;
    }

    /**
     * @return PrestashopOrderCarrier
     */
    public function setIdOrder(?int $idOrder): self
    {
        $this->idOrder = $idOrder;

        return $this;
    }

    public function getIdCarrier(): ?int
    {
        return $this->idCarrier;
    }

    /**
     * @return PrestashopOrderCarrier
     */
    public function setIdCarrier(?int $idCarrier): self
    {
        $this->idCarrier = $idCarrier;

        return $this;
    }

    public function getIdOrderInvoice(): ?int
    {
        return $this->idOrderInvoice;
    }

    /**
     * @return PrestashopOrderCarrier
     */
    public function setIdOrderInvoice(?int $idOrderInvoice): self
    {
        $this->idOrderInvoice = $idOrderInvoice;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * @return PrestashopOrderCarrier
     */
    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getShippingCostTaxExcl(): ?float
    {
        return $this->shippingCostTaxExcl;
    }

    /**
     * @return PrestashopOrderCarrier
     */
    public function setShippingCostTaxExcl(?float $shippingCostTaxExcl): self
    {
        $this->shippingCostTaxExcl = $shippingCostTaxExcl;

        return $this;
    }

    public function getShippingCostTaxIncl(): ?float
    {
        return $this->shippingCostTaxIncl;
    }

    /**
     * @return PrestashopOrderCarrier
     */
    public function setShippingCostTaxIncl(?float $shippingCostTaxIncl): self
    {
        $this->shippingCostTaxIncl = $shippingCostTaxIncl;

        return $this;
    }

    public function getTrackingNumber(): ?string
    {
        return $this->trackingNumber;
    }

    /**
     * @return PrestashopOrderCarrier
     */
    public function setTrackingNumber(?string $trackingNumber): self
    {
        $this->trackingNumber = $trackingNumber;

        return $this;
    }

    public function getDateAdd(): ?\DateTimeInterface
    {
        return $this->dateAdd;
    }

    /**
     * @return PrestashopOrderCarrier
     */
    public function setDateAdd(?\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }
}
