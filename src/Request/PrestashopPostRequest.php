<?php

namespace Scraper\ScraperPrestashop\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestBody;
use Scraper\ScraperPrestashop\Entity\PrestashopPost;
use Scraper\ScraperPrestashop\Factory\SerializerFactory;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;

#[Scraper(method: Method::POST)]
class PrestashopPostRequest extends PrestashopRequest implements RequestBody
{
    protected PrestashopPost $prestashopPost;

    public function getPrestashopPost(): PrestashopPost
    {
        return $this->prestashopPost;
    }

    public function setPrestashopPost(PrestashopPost $prestashopPost): self
    {
        $this->prestashopPost = $prestashopPost;

        return $this;
    }

    public function getBody()
    {
        return SerializerFactory::create()->serialize($this->prestashopPost, 'xml', [
            AbstractObjectNormalizer::SKIP_NULL_VALUES => true,
        ]);
    }
}
