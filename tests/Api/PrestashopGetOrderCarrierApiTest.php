<?php declare(strict_types=1);

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

        $this->assertEquals(1, $result->id);
        $this->assertEquals(1, $result->idOrder);

        $this->assertInstanceOf(\DateTimeInterface::class, $result->dateAdd);
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
        $this->assertCount(2, $result->orderCarriers);
        $this->assertInstanceOf(PrestashopOrderCarrier::class, $result->orderCarriers[0]);
    }
}
