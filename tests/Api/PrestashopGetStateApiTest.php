<?php declare(strict_types=1);

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

        $this->assertEquals(1, $result->id);
        $this->assertEquals('AA', $result->name);
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
        $this->assertCount(2, $result->states);
        $this->assertInstanceOf(PrestashopState::class, $result->states[0]);
    }
}
