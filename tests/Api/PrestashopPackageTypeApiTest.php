<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Tests\Api;

use Scraper\ScraperPrestashop\Entity\CadoMaestro\PrestashopPackageType;
use Scraper\ScraperPrestashop\Entity\CadoMaestro\PrestashopPackageTypes;
use Scraper\ScraperPrestashop\Entity\PrestashopStockAvailable;
use Scraper\ScraperPrestashop\Entity\PrestashopStockAvailables;

/**
 * @internal
 */
class PrestashopPackageTypeApiTest extends AbstractPrestashopApiTestCase
{
    public function testOne(): void
    {
        /** @var PrestashopStockAvailable $result */
        $result = $this->executeGetApi(
            'package_types',
            1,
            200,
            'package_type.json'
        );

        $this->assertInstanceOf(PrestashopPackageType::class, $result);

        $this->assertEquals(1, $result->id);
    }

    public function testList(): void
    {
        /** @var PrestashopStockAvailables $result */
        $result = $this->executeGetApi(
            'package_types',
            null,
            200,
            'package_types.json'
        );

        $this->assertInstanceOf(PrestashopPackageTypes::class, $result);
        $this->assertCount(2, $result->packageTypes);
        $this->assertInstanceOf(PrestashopPackageType::class, $result->packageTypes[0]);
    }
}
