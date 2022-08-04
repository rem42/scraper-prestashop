<?php declare(strict_types=1);

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

        $this->assertEquals(42, $result->id);
        $this->assertEquals(24, $result->idCustomer);

        $this->assertFalse($result->deleted);

        $this->assertInstanceOf(\DateTimeInterface::class, $result->dateAdd);

        $this->assertInstanceOf(\DateTimeInterface::class, $result->dateUpd);
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
        $this->assertCount(2, $result->addresses);
        $this->assertInstanceOf(PrestashopAddress::class, $result->addresses[0]);
    }
}
