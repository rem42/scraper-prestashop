<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Tests\Api;

use Scraper\ScraperPrestashop\Entity\CadoMaestro\PrestashopPackage;
use Scraper\ScraperPrestashop\Entity\CadoMaestro\PrestashopPackages;
use Scraper\ScraperPrestashop\Entity\PrestashopStockAvailable;
use Scraper\ScraperPrestashop\Entity\PrestashopStockAvailables;

/**
 * @internal
 */
class PrestashopPackageApiTest extends AbstractPrestashopApiTestCase
{
    public function testOne(): void
    {
        /** @var PrestashopStockAvailable $result */
        $result = $this->executeGetApi(
            'packages',
            1,
            200,
            'package.json'
        );

        $this->assertInstanceOf(PrestashopPackage::class, $result);

        $this->assertEquals(1, $result->id);
    }

    public function testList(): void
    {
        /** @var PrestashopStockAvailables $result */
        $result = $this->executeGetApi(
            'packages',
            null,
            200,
            'packages.json'
        );

        $this->assertInstanceOf(PrestashopPackages::class, $result);
        $this->assertCount(2, $result->packages);
        $this->assertInstanceOf(PrestashopPackage::class, $result->packages[0]);
    }
}
