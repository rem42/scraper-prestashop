<?php

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopOrderRow
{
    private ?string $productEan13;

    private ?int $id = null;

    private ?int $productId = null;

    private ?int $productAttributeId = null;

    private ?int $productQuantity = null;

    private ?string $productName = null;

    private ?string $productReference = null;

    private ?string $productIsbn = null;

    private ?string $productUpc = null;

    private ?float $productPrice = null;

    private ?float $unitPriceTaxIncl = null;

    private ?float $unitPriceTaxExcl = null;

    public function getProductEan13(): ?string
    {
        return $this->productEan13;
    }

    /**
     * @return PrestashopOrderRow
     */
    public function setProductEan13(?string $productEan13): self
    {
        $this->productEan13 = $productEan13;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return PrestashopOrderRow
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @return PrestashopOrderRow
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;

        return $this;
    }

    public function getProductAttributeId(): ?int
    {
        return $this->productAttributeId;
    }

    /**
     * @return PrestashopOrderRow
     */
    public function setProductAttributeId(?int $productAttributeId): self
    {
        $this->productAttributeId = $productAttributeId;

        return $this;
    }

    public function getProductQuantity(): ?int
    {
        return $this->productQuantity;
    }

    /**
     * @return PrestashopOrderRow
     */
    public function setProductQuantity(?int $productQuantity): self
    {
        $this->productQuantity = $productQuantity;

        return $this;
    }

    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * @return PrestashopOrderRow
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;

        return $this;
    }

    public function getProductReference(): ?string
    {
        return $this->productReference;
    }

    /**
     * @return PrestashopOrderRow
     */
    public function setProductReference(?string $productReference): self
    {
        $this->productReference = $productReference;

        return $this;
    }

    public function getProductIsbn(): ?string
    {
        return $this->productIsbn;
    }

    /**
     * @return PrestashopOrderRow
     */
    public function setProductIsbn(?string $productIsbn): self
    {
        $this->productIsbn = $productIsbn;

        return $this;
    }

    public function getProductUpc(): ?string
    {
        return $this->productUpc;
    }

    /**
     * @return PrestashopOrderRow
     */
    public function setProductUpc(?string $productUpc): self
    {
        $this->productUpc = $productUpc;

        return $this;
    }

    public function getProductPrice(): ?float
    {
        return $this->productPrice;
    }

    /**
     * @return PrestashopOrderRow
     */
    public function setProductPrice(?float $productPrice): self
    {
        $this->productPrice = $productPrice;

        return $this;
    }

    public function getUnitPriceTaxIncl(): ?float
    {
        return $this->unitPriceTaxIncl;
    }

    /**
     * @return PrestashopOrderRow
     */
    public function setUnitPriceTaxIncl(?float $unitPriceTaxIncl): self
    {
        $this->unitPriceTaxIncl = $unitPriceTaxIncl;

        return $this;
    }

    public function getUnitPriceTaxExcl(): ?float
    {
        return $this->unitPriceTaxExcl;
    }

    /**
     * @return PrestashopOrderRow
     */
    public function setUnitPriceTaxExcl(?float $unitPriceTaxExcl): self
    {
        $this->unitPriceTaxExcl = $unitPriceTaxExcl;

        return $this;
    }
}
