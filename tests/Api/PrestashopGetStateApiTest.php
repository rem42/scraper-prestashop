<?php

namespace Scraper\ScraperPrestashop\Tests\Api;

use Scraper\ScraperPrestashop\Entity\PrestashopState;
use Scraper\ScraperPrestashop\Entity\PrestashopStates;

/**
 * @internal
 */
class PrestashopGetStateApiTest extends AbstractPrestashopApiTestCase
{
    public function testOne(): void
    {
        /** @var PrestashopState $result */
        $result = $this->executeGetApi(
            'states',
            1,
            200,
            'state.json'
        );

        $this->assertInstanceOf(PrestashopState::class, $result);

        $this->assertEquals(1, $result->getId());
        $this->assertEquals('AA', $result->getName());
    }

    public function testList(): void
    {
        /** @var PrestashopStates $result */
        $result = $this->executeGetApi(
            'states',
            null,
            200,
            'states.json'
        );

        $this->assertInstanceOf(PrestashopStates::class, $result);
        $this->assertCount(2, $result->getStates());
        $this->assertInstanceOf(PrestashopState::class, $result->getStates()->first());
    }
}
