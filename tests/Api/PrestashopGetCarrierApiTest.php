<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Tests\Api;

use Scraper\ScraperPrestashop\Entity\PrestashopCarrier;
use Scraper\ScraperPrestashop\Entity\PrestashopCarriers;
use Scraper\ScraperPrestashop\Entity\PrestashopItem;

/**
 * @internal
 */
class PrestashopGetCarrierApiTest extends AbstractPrestashopApiTestCase
{
    public function testOne(): void
    {
        /** @var PrestashopCarrier $result */
        $result = $this->executeGetApi(
            'carriers',
            42,
            200,
            'carrier.json'
        );

        $this->assertInstanceOf(PrestashopCarrier::class, $result);

        $this->assertEquals(42, $result->id);
        $this->assertEquals(24, $result->idReference);

        $this->assertCount(1, $result->delay);

        $this->assertInstanceOf(PrestashopItem::class, $result->delay[0]);
    }

    public function testMultilang(): void
    {
        /** @var PrestashopCarrier $result */
        $result = $this->executeGetApi(
            'carriers',
            42,
            200,
            'carrier_multilang.json'
        );

        $this->assertInstanceOf(PrestashopCarrier::class, $result);

        $this->assertEquals(42, $result->id);
        $this->assertEquals(24, $result->idReference);

        $this->assertCount(2, $result->delay);

        $this->assertInstanceOf(PrestashopItem::class, $result->delay[0]);
    }

    public function testList(): void
    {
        /** @var PrestashopCarriers $result */
        $result = $this->executeGetApi(
            'carriers',
            null,
            200,
            'carriers.json'
        );

        $this->assertInstanceOf(PrestashopCarriers::class, $result);
        $this->assertCount(2, $result->carriers);
        $this->assertInstanceOf(PrestashopCarrier::class, $result->carriers[0]);
    }
}
