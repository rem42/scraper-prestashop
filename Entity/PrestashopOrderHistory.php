<?php

namespace Scraper\ScraperPrestashop\Entity;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class PrestashopOrderHistory
 *
 * @Serializer\XmlRoot(name="order_history")
 */
class PrestashopOrderHistory
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
     * @Serializer\SerializedName("id_employee")
     */
    protected $idEmployee;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_order_state")
     */
    protected $idOrderState;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id_order")
     */
    protected $idOrder;
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
    public function getIdEmployee(): ?int
    {
        return $this->idEmployee;
    }

    /**
     * @param int $idEmployee
     *
     * @return $this
     */
    public function setIdEmployee(?int $idEmployee)
    {
        $this->idEmployee = $idEmployee;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdOrderState(): ?int
    {
        return $this->idOrderState;
    }

    /**
     * @param int $idOrderState
     *
     * @return $this
     */
    public function setIdOrderState(?int $idOrderState)
    {
        $this->idOrderState = $idOrderState;
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
