<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Api;

use Scraper\Scraper\Api\AbstractApi;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\ScraperRequest;
use Scraper\ScraperPrestashop\Factory\SerializerFactory;
use Symfony\Contracts\HttpClient\ResponseInterface;

abstract class PrestashopApi extends AbstractApi
{
    public function __construct(ScraperRequest $request, Scraper $scraper, ResponseInterface $response)
    {
        parent::__construct($request, $scraper, $response);
        $this->serializer = SerializerFactory::create();
    }
}
