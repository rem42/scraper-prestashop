<?php

namespace Scraper\ScraperPrestashop\Tests\Api;

use Scraper\ScraperPrestashop\Entity\PrestashopOrderCarrier;
use Scraper\ScraperPrestashop\Entity\PrestashopOrderCarriers;

/**
 * @internal
 */
class PrestashopGetOrderCarrierApiTest extends AbstractPrestashopApiTestCase
{
    public function testOne(): void
    {
        /** @var PrestashopOrderCarrier $result */
        $result = $this->executeGetApi(
            'order_carriers',
            1,
            200,
            'order_carrier.json'
        );

        $this->assertInstanceOf(PrestashopOrderCarrier::class, $result);

        $this->assertEquals(1, $result->getId());
        $this->assertEquals(1, $result->getIdOrder());

        $this->assertInstanceOf(\DateTimeInterface::class, $result->getDateAdd());
    }

    public function testList(): void
    {
        /** @var PrestashopOrderCarriers $result */
        $result = $this->executeGetApi(
            'order_carriers',
            null,
            200,
            'order_carriers.json'
        );

        $this->assertInstanceOf(PrestashopOrderCarriers::class, $result);
        $this->assertCount(2, $result->getOrderCarriers());
        $this->assertInstanceOf(PrestashopOrderCarrier::class, $result->getOrderCarriers()->first());
    }
}
