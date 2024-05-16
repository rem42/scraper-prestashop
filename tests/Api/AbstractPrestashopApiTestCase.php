<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Tests\Api;

use PHPUnit\Framework\TestCase;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\ScraperPrestashop\Api\PrestashopGetApi;
use Scraper\ScraperPrestashop\Request\PrestashopGetRequest;
use Symfony\Contracts\HttpClient\ResponseInterface;

abstract class AbstractPrestashopApiTestCase extends TestCase
{
    protected static string $fixturesDir;

    protected function setUp(): void
    {
        parent::setUp();

        static::$fixturesDir = __DIR__ . '/../fixtures/';
    }

    protected function fixturePath(string $filename): string
    {
        return static::$fixturesDir . $filename;
    }

    protected function loadFixture(string $filename): string
    {
        $path = $this->fixturePath($filename);

        if (!file_exists($path)) {
            throw new \Exception('you need to create file first: ' . $path);
        }

        return file_get_contents($path);
    }

    /**
     * @param mixed|null $id
     *
     * @return array<object>|bool|object
     */
    protected function executeGetApi($resource, $id = null, $statusCode, $fixture)
    {
        $scraperRequest = $this->createMock(PrestashopGetRequest::class);
        $scraperRequest->method('getResource')->willReturn($resource);
        $scraperRequest->method('getId')->willReturn($id);

        $scraper = new Scraper();

        $responseInterface = $this->createMock(ResponseInterface::class);
        $responseInterface
            ->method('getStatusCode')->willReturn($statusCode)
        ;
        $responseInterface
            ->method('getContent')->willReturn($this->loadFixture($fixture))
        ;

        $prestashopGetApi = new PrestashopGetApi(
            $scraperRequest,
            $scraper,
            $responseInterface
        );

        return $prestashopGetApi->execute();
    }
}
