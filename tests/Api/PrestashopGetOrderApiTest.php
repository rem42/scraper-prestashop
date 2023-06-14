<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Tests\Api;

use Scraper\ScraperPrestashop\Entity\PrestashopAssociations;
use Scraper\ScraperPrestashop\Entity\PrestashopOrder;
use Scraper\ScraperPrestashop\Entity\PrestashopOrderRow;
use Scraper\ScraperPrestashop\Entity\PrestashopOrders;

/**
 * @internal
 */
class PrestashopGetOrderApiTest extends AbstractPrestashopApiTestCase
{
    public function testOne(): void
    {
        /** @var PrestashopOrder $result */
        $result = $this->executeGetApi(
            'orders',
            1,
            200,
            'order.json'
        );

        $this->assertInstanceOf(PrestashopOrder::class, $result);

        $this->assertEquals(1, $result->id);
        $this->assertEquals(1, $result->idCart);

        $this->assertInstanceOf(\DateTimeInterface::class, $result->dateAdd);

        $this->assertInstanceOf(PrestashopAssociations::class, $result->associations);

        $this->assertCount(2, $result->associations->orderRows);
        $this->assertInstanceOf(PrestashopOrderRow::class, $result->associations->orderRows[0]);
    }

    public function testList(): void
    {
        /** @var PrestashopOrders $result */
        $result = $this->executeGetApi(
            'orders',
            null,
            200,
            'orders.json'
        );

        $this->assertInstanceOf(PrestashopOrders::class, $result);
        $this->assertCount(2, $result->orders);
        $this->assertInstanceOf(PrestashopOrder::class, $result->orders[0]);
    }
}
