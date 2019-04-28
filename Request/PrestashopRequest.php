<?php

namespace Scraper\ScraperPrestashop\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;
use Scraper\Scraper\Request\Request;

/**
 * Class PrestashopRequest
 *
 * @UrlAnnotation(baseUrl="{urlWebsite}/api/")
 */
abstract class PrestashopRequest extends Request
{
    /**
     * @var string
     */
    protected $urlWebsite;
    /**
     * @var string
     */
    protected $key;

    public function getParameters()
    {
        return [
            'ws_key' => $this->key,
            'io_format' => 'JSON',
        ];
    }

    public function getBody()
    {
        return [];
    }

    public function getHeaders()
    {
        return [];
    }

    /**
     * @return string
     */
    public function getUrlWebsite(): ?string
    {
        return $this->urlWebsite;
    }

    /**
     * @param string $urlWebsite
     *
     * @return $this
     */
    public function setUrlWebsite(?string $urlWebsite)
    {
        $this->urlWebsite = $urlWebsite;
        return $this;
    }

    /**
     * @return string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * @param string $key
     *
     * @return $this
     */
    public function setKey(?string $key)
    {
        $this->key = $key;
        return $this;
    }
}
