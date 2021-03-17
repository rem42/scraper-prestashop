<?php

namespace Scraper\ScraperPrestashop\Tests\Api;

use Scraper\ScraperPrestashop\Entity\PrestashopStockAvailable;
use Scraper\ScraperPrestashop\Entity\PrestashopStockAvailables;
use Scraper\ScraperPrestashop\Entity\Rem42Webservices\Colissimo\PrestashopPickupPoint;

/**
 * @internal
 */
class PrestashopColissimoPickUpPointApiTest extends AbstractPrestashopApiTestCase
{
    public function testOne(): void
    {
        /** @var PrestashopPickupPoint $result */
        $result = $this->executeGetApi(
            'rem42_webservices/colissimo/pickup_points',
            1,
            200,
            'colissimo_pickup_point.json'
        );

        $this->assertInstanceOf(PrestashopPickupPoint::class, $result);

        $this->assertEquals(1, $result->getId());
        $this->assertEquals(8, $result->getIdOrder());
    }

    public function testList(): void
    {
        /** @var PrestashopStockAvailables $result */
        $result = $this->executeGetApi(
            'stock_availables',
            null,
            200,
            'stock_availables.json'
        );

        $this->assertInstanceOf(PrestashopStockAvailables::class, $result);
        $this->assertCount(2, $result->getStockAvailables());
        $this->assertInstanceOf(PrestashopStockAvailable::class, $result->getStockAvailables()->first());
    }
}
