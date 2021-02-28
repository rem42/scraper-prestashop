<?php

namespace Scraper\ScraperPrestashop\Tests\Api;

use Scraper\ScraperPrestashop\Entity\PrestashopOrderInvoice;
use Scraper\ScraperPrestashop\Entity\PrestashopOrderInvoices;

/**
 * @internal
 */
class PrestashopGetOrderInvoiceApiTest extends AbstractPrestashopApiTestCase
{
    public function testOne(): void
    {
        /** @var PrestashopOrderInvoice $result */
        $result = $this->executeGetApi(
            'order_invoices',
            1,
            200,
            'order_invoice.json'
        );

        $this->assertInstanceOf(PrestashopOrderInvoice::class, $result);

        $this->assertEquals(1, $result->getId());
        $this->assertEquals(6, $result->getIdOrder());

        $this->assertInstanceOf(\DateTimeInterface::class, $result->getDateAdd());
    }

    public function testList(): void
    {
        /** @var PrestashopOrderInvoices $result */
        $result = $this->executeGetApi(
            'order_invoices',
            null,
            200,
            'order_invoices.json'
        );

        $this->assertInstanceOf(PrestashopOrderInvoices::class, $result);
        $this->assertCount(2, $result->getOrderInvoices());
        $this->assertInstanceOf(PrestashopOrderInvoice::class, $result->getOrderInvoices()->first());
    }
}
