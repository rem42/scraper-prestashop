<?php

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

        $this->assertEquals(1, $result->getId());
        $this->assertEquals(1, $result->getIdCart());

        $this->assertInstanceOf(\DateTimeInterface::class, $result->getDateAdd());

        $this->assertInstanceOf(PrestashopAssociations::class, $result->getAssociations());

        $this->assertCount(2, $result->getAssociations()->getOrderRows());
        $this->assertInstanceOf(PrestashopOrderRow::class, $result->getAssociations()->getOrderRows()->first());
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
        $this->assertCount(2, $result->getOrders());
        $this->assertInstanceOf(PrestashopOrder::class, $result->getOrders()->first());
    }
}
