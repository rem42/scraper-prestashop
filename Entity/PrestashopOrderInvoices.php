<?php

namespace Scraper\ScraperPrestashop\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class PrestashopOrderInvoices
 */
class PrestashopOrderInvoices
{
    /**
     * @var ArrayCollection|PrestashopOrderInvoice[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperPrestashop\Entity\PrestashopOrderInvoice>")
     * @Serializer\SerializedName("order_invoices")
     */
    protected $orderInvoices;

    /**
     * @return ArrayCollection|PrestashopOrderInvoice[]
     */
    public function getOrderInvoices()
    {
        return $this->orderInvoices;
    }

    /**
     * @param ArrayCollection|PrestashopOrderInvoice[] $orderInvoices
     *
     * @return $this
     */
    public function setOrderInvoices($orderInvoices)
    {
        $this->orderInvoices = $orderInvoices;
        return $this;
    }
}
