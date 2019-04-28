<?php

namespace Scraper\ScraperPrestashop\Entity;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class PrestashopOrderInvoice
 */
class PrestashopOrderInvoice
{
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id")
     */
    protected $id;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_order")
     */
    protected $idOrder;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("number")
     */
    protected $number;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("delivery_number")
     */
    protected $deliveryNumber;
    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
     * @Serializer\SerializedName("delivery_date")
     */
    protected $deliveryDate;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_discount_tax_excl")
     */
    protected $totalDiscountTaxExcl;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_discount_tax_incl")
     */
    protected $totalDiscountTaxIncl;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_paid_tax_excl")
     */
    protected $totalPaidTaxExcl;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_paid_tax_incl")
     */
    protected $totalPaidTaxIncl;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_products")
     */
    protected $totalProducts;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_products_wt")
     */
    protected $totalProductsWt;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_shipping_tax_excl")
     */
    protected $totalShippingTaxExcl;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_shipping_tax_incl")
     */
    protected $totalShippingTaxIncl;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("shipping_tax_computation_method")
     */
    protected $shippingTaxComputationMethod;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_wrapping_tax_excl")
     */
    protected $totalWrappingTaxExcl;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_wrapping_tax_incl")
     */
    protected $totalWrappingTaxIncl;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shop_address")
     */
    protected $shopAddress;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("note")
     */
    protected $note;
    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
     * @Serializer\SerializedName("date_add")
     */
    protected $dateAdd;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId(?int $id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdOrder(): ?int
    {
        return $this->idOrder;
    }

    /**
     * @param int $idOrder
     *
     * @return $this
     */
    public function setIdOrder(?int $idOrder)
    {
        $this->idOrder = $idOrder;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * @param int $number
     *
     * @return $this
     */
    public function setNumber(?int $number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryNumber(): ?int
    {
        return $this->deliveryNumber;
    }

    /**
     * @param int $deliveryNumber
     *
     * @return $this
     */
    public function setDeliveryNumber(?int $deliveryNumber)
    {
        $this->deliveryNumber = $deliveryNumber;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate(): ?\DateTime
    {
        return $this->deliveryDate;
    }

    /**
     * @param \DateTime $deliveryDate
     *
     * @return $this
     */
    public function setDeliveryDate(?\DateTime $deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalDiscountTaxExcl(): ?float
    {
        return $this->totalDiscountTaxExcl;
    }

    /**
     * @param float $totalDiscountTaxExcl
     *
     * @return $this
     */
    public function setTotalDiscountTaxExcl(?float $totalDiscountTaxExcl)
    {
        $this->totalDiscountTaxExcl = $totalDiscountTaxExcl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalDiscountTaxIncl(): ?float
    {
        return $this->totalDiscountTaxIncl;
    }

    /**
     * @param float $totalDiscountTaxIncl
     *
     * @return $this
     */
    public function setTotalDiscountTaxIncl(?float $totalDiscountTaxIncl)
    {
        $this->totalDiscountTaxIncl = $totalDiscountTaxIncl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPaidTaxExcl(): ?float
    {
        return $this->totalPaidTaxExcl;
    }

    /**
     * @param float $totalPaidTaxExcl
     *
     * @return $this
     */
    public function setTotalPaidTaxExcl(?float $totalPaidTaxExcl)
    {
        $this->totalPaidTaxExcl = $totalPaidTaxExcl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPaidTaxIncl(): ?float
    {
        return $this->totalPaidTaxIncl;
    }

    /**
     * @param float $totalPaidTaxIncl
     *
     * @return $this
     */
    public function setTotalPaidTaxIncl(?float $totalPaidTaxIncl)
    {
        $this->totalPaidTaxIncl = $totalPaidTaxIncl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalProducts(): ?float
    {
        return $this->totalProducts;
    }

    /**
     * @param float $totalProducts
     *
     * @return $this
     */
    public function setTotalProducts(?float $totalProducts)
    {
        $this->totalProducts = $totalProducts;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalProductsWt(): ?float
    {
        return $this->totalProductsWt;
    }

    /**
     * @param float $totalProductsWt
     *
     * @return $this
     */
    public function setTotalProductsWt(?float $totalProductsWt)
    {
        $this->totalProductsWt = $totalProductsWt;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalShippingTaxExcl(): ?float
    {
        return $this->totalShippingTaxExcl;
    }

    /**
     * @param float $totalShippingTaxExcl
     *
     * @return $this
     */
    public function setTotalShippingTaxExcl(?float $totalShippingTaxExcl)
    {
        $this->totalShippingTaxExcl = $totalShippingTaxExcl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalShippingTaxIncl(): ?float
    {
        return $this->totalShippingTaxIncl;
    }

    /**
     * @param float $totalShippingTaxIncl
     *
     * @return $this
     */
    public function setTotalShippingTaxIncl(?float $totalShippingTaxIncl)
    {
        $this->totalShippingTaxIncl = $totalShippingTaxIncl;
        return $this;
    }

    /**
     * @return int
     */
    public function getShippingTaxComputationMethod(): ?int
    {
        return $this->shippingTaxComputationMethod;
    }

    /**
     * @param int $shippingTaxComputationMethod
     *
     * @return $this
     */
    public function setShippingTaxComputationMethod(?int $shippingTaxComputationMethod)
    {
        $this->shippingTaxComputationMethod = $shippingTaxComputationMethod;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalWrappingTaxExcl(): ?float
    {
        return $this->totalWrappingTaxExcl;
    }

    /**
     * @param float $totalWrappingTaxExcl
     *
     * @return $this
     */
    public function setTotalWrappingTaxExcl(?float $totalWrappingTaxExcl)
    {
        $this->totalWrappingTaxExcl = $totalWrappingTaxExcl;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalWrappingTaxIncl(): ?float
    {
        return $this->totalWrappingTaxIncl;
    }

    /**
     * @param float $totalWrappingTaxIncl
     *
     * @return $this
     */
    public function setTotalWrappingTaxIncl(?float $totalWrappingTaxIncl)
    {
        $this->totalWrappingTaxIncl = $totalWrappingTaxIncl;
        return $this;
    }

    /**
     * @return string
     */
    public function getShopAddress(): ?string
    {
        return $this->shopAddress;
    }

    /**
     * @param string $shopAddress
     *
     * @return $this
     */
    public function setShopAddress(?string $shopAddress)
    {
        $this->shopAddress = $shopAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @param string $note
     *
     * @return $this
     */
    public function setNote(?string $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateAdd(): ?\DateTime
    {
        return $this->dateAdd;
    }

    /**
     * @param \DateTime $dateAdd
     *
     * @return $this
     */
    public function setDateAdd(?\DateTime $dateAdd)
    {
        $this->dateAdd = $dateAdd;
        return $this;
    }
}
