<?php

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

        $this->assertEquals(1, $result->getId());
        $this->assertEquals('DE', $result->getIsoCode());

        $this->assertCount(1, $result->getName());

        $this->assertInstanceOf(PrestashopItem::class, $result->getName()->first());
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

        $this->assertEquals(1, $result->getId());
        $this->assertEquals('DE', $result->getIsoCode());

        $this->assertCount(2, $result->getName());

        $this->assertInstanceOf(PrestashopItem::class, $result->getName()->first());
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
        $this->assertCount(2, $result->getCountries());
        $this->assertInstanceOf(PrestashopCountry::class, $result->getCountries()->first());
    }
}
