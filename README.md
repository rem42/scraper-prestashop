Scraper Prestashop
==================

![Packagist version](https://flat.badgen.net/packagist/v/rem42/scraper-prestashop)
![Packagist download](https://flat.badgen.net/packagist/dt/rem42/scraper-prestashop)
![Packagist name](https://flat.badgen.net/packagist/name/rem42/scraper-prestashop)
![Packagist php version](https://flat.badgen.net/packagist/php/rem42/scraper-prestashop)
![Github licence](https://flat.badgen.net/github/license/rem42/scraper-prestashop)
![Depenabot](https://flat.badgen.net/github/dependabot/rem42/scraper-prestashop)
![Codeclimate lines of code](https://flat.badgen.net/codeclimate/loc/rem42/scraper-prestashop)
![Codeclimate maintainability](https://flat.badgen.net/codeclimate/maintainability/rem42/scraper-prestashop)

Scraper can handle multiple request type and transform them into object in order to create some API.

Installation
------------

````bash
composer require rem42/scraper-prestashop
````

Requirement
-----------

- PHP >= 8.1

Usage
-----

Initiate the client with the http client of your choice that implement the `Symfony\Contracts\HttpClient\HttpClientInterface` interface.


`````php
<?php

use Scraper\Scraper\Client;
use Symfony\Component\HttpClient\CurlHttpClient;
use Symfony\Component\HttpClient\NativeHttpClient;

$client = new Client(
    new CurlHttpClient()
    // OR
    new NativeHttpClient()
);
`````

Then you can use the client to make request to the API.

Product list
------------

`````php
<?php

use Scraper\ScraperPrestashop\Request\PrestashopGetRequest;
use Scraper\ScraperPrestashop\Entity\PrestashopProducts;

$request = new PrestashopGetRequest(
    'host.com', // Your prestashop host
    'key', // Your prestashop webservice key
    'products', // The resource you want to get, like 'products'
);

// optional for list request
$request
    ->addFilter('limit', 1)
    ->addFilter('offset', 1)
;

/** @var PrestashopProducts $products */
$products = $client->execute($request);

$products->getProducts(); // Return an array of PrestashopProduct
`````

Product detail
--------------

`````php
<?php

use Scraper\ScraperPrestashop\Request\PrestashopGetRequest;
use Scraper\ScraperPrestashop\Entity\PrestashopProduct;

$request = new PrestashopGetRequest(
    'host.com', // Your prestashop host
    'key', // Your prestashop webservice key
    'products', // The resource you want to get, like 'products'
);

$request->setId(42);

/** @var PrestashopProduct $product */
$product = $client->execute($request);

$product->name; // Return the product name
$product->dateAdd; // Return the product creation date
`````

