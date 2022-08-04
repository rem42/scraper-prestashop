<?php declare(strict_types=1);

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

        $this->assertEquals(1, $result->id);
        $this->assertEquals(6, $result->idOrder);

        $this->assertInstanceOf(\DateTimeInterface::class, $result->dateAdd);
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
        $this->assertCount(2, $result->orderInvoices);
        $this->assertInstanceOf(PrestashopOrderInvoice::class, $result->orderInvoices[0]);
    }
}
