<?php

namespace Scraper\ScraperPrestashop\Tests\Api;

use Scraper\ScraperPrestashop\Entity\PrestashopAddress;
use Scraper\ScraperPrestashop\Entity\PrestashopAddresses;

/**
 * @internal
 */
class PrestashopGetAddressApiTest extends AbstractPrestashopApiTestCase
{
    public function testOne(): void
    {
        $result = $this->executeGetApi(
            'addresses',
            42,
            200,
            'address.json'
        );

        $this->assertInstanceOf(PrestashopAddress::class, $result);

        $this->assertEquals(42, $result->getId());
        $this->assertEquals(24, $result->getIdCustomer());

        $this->assertFalse($result->getDeleted());

        $this->assertInstanceOf(\DateTimeInterface::class, $result->getDateAdd());

        $this->assertInstanceOf(\DateTimeInterface::class, $result->getDateUpd());
    }

    public function testList(): void
    {
        $result = $this->executeGetApi(
            'addresses',
            null,
            200,
            'addresses.json'
        );

        $this->assertInstanceOf(PrestashopAddresses::class, $result);
        $this->assertCount(2, $result->getAddresses());
        $this->assertInstanceOf(PrestashopAddress::class, $result->getAddresses()->first());
    }
}
