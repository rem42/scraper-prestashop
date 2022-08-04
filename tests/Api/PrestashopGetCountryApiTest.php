<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Tests\Api;

use Scraper\ScraperPrestashop\Entity\PrestashopCountries;
use Scraper\ScraperPrestashop\Entity\PrestashopCountry;
use Scraper\ScraperPrestashop\Entity\PrestashopItem;

/**
 * @internal
 */
class PrestashopGetCountryApiTest extends AbstractPrestashopApiTestCase
{
    public function testOne(): void
    {
        /** @var PrestashopCountry $result */
        $result = $this->executeGetApi(
            'countries',
            1,
            200,
            'country.json'
        );

        $this->assertInstanceOf(PrestashopCountry::class, $result);

        $this->assertEquals(1, $result->id);
        $this->assertEquals('DE', $result->isoCode);

        $this->assertCount(1, $result->name);

        $this->assertInstanceOf(PrestashopItem::class, $result->name[0]);
    }

    public function testMultilang(): void
    {
        /** @var PrestashopCountry $result */
        $result = $this->executeGetApi(
            'countries',
            1,
            200,
            'country_multilang.json'
        );

        $this->assertInstanceOf(PrestashopCountry::class, $result);

        $this->assertEquals(1, $result->id);
        $this->assertEquals('DE', $result->isoCode);

        $this->assertCount(2, $result->name);

        $this->assertInstanceOf(PrestashopItem::class, $result->name[0]);
    }

    public function testList(): void
    {
        /** @var PrestashopCountries $result */
        $result = $this->executeGetApi(
            'countries',
            null,
            200,
            'countries.json'
        );

        $this->assertInstanceOf(PrestashopCountries::class, $result);
        $this->assertCount(2, $result->countries);
        $this->assertInstanceOf(PrestashopCountry::class, $result->countries[0]);
    }
}
