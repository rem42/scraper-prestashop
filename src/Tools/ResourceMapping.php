<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Tools;

use Scraper\ScraperPrestashop\Entity\CadoMaestro\PrestashopPackage;
use Scraper\ScraperPrestashop\Entity\CadoMaestro\PrestashopPackages;
use Scraper\ScraperPrestashop\Entity\CadoMaestro\PrestashopPackageType;
use Scraper\ScraperPrestashop\Entity\CadoMaestro\PrestashopPackageTypes;
use Scraper\ScraperPrestashop\Entity\PrestashopAddress;
use Scraper\ScraperPrestashop\Entity\PrestashopAddresses;
use Scraper\ScraperPrestashop\Entity\PrestashopCarrier;
use Scraper\ScraperPrestashop\Entity\PrestashopCarriers;
use Scraper\ScraperPrestashop\Entity\PrestashopCart;
use Scraper\ScraperPrestashop\Entity\PrestashopCartRule;
use Scraper\ScraperPrestashop\Entity\PrestashopCartRules;
use Scraper\ScraperPrestashop\Entity\PrestashopCarts;
use Scraper\ScraperPrestashop\Entity\PrestashopCategories;
use Scraper\ScraperPrestashop\Entity\PrestashopCategory;
use Scraper\ScraperPrestashop\Entity\PrestashopCombination;
use Scraper\ScraperPrestashop\Entity\PrestashopCombinations;
use Scraper\ScraperPrestashop\Entity\PrestashopConfiguration;
use Scraper\ScraperPrestashop\Entity\PrestashopConfigurations;
use Scraper\ScraperPrestashop\Entity\PrestashopContact;
use Scraper\ScraperPrestashop\Entity\PrestashopContacts;
use Scraper\ScraperPrestashop\Entity\PrestashopContentManagementSystem;
use Scraper\ScraperPrestashop\Entity\PrestashopCountries;
use Scraper\ScraperPrestashop\Entity\PrestashopCountry;
use Scraper\ScraperPrestashop\Entity\PrestashopCustomer;
use Scraper\ScraperPrestashop\Entity\PrestashopCustomers;
use Scraper\ScraperPrestashop\Entity\PrestashopImage;
use Scraper\ScraperPrestashop\Entity\PrestashopImages;
use Scraper\ScraperPrestashop\Entity\PrestashopOrder;
use Scraper\ScraperPrestashop\Entity\PrestashopOrderCarrier;
use Scraper\ScraperPrestashop\Entity\PrestashopOrderCarriers;
use Scraper\ScraperPrestashop\Entity\PrestashopOrderHistories;
use Scraper\ScraperPrestashop\Entity\PrestashopOrderHistory;
use Scraper\ScraperPrestashop\Entity\PrestashopOrderInvoice;
use Scraper\ScraperPrestashop\Entity\PrestashopOrderInvoices;
use Scraper\ScraperPrestashop\Entity\PrestashopOrders;
use Scraper\ScraperPrestashop\Entity\PrestashopOrderState;
use Scraper\ScraperPrestashop\Entity\PrestashopOrderStates;
use Scraper\ScraperPrestashop\Entity\PrestashopProduct;
use Scraper\ScraperPrestashop\Entity\PrestashopProductFeature;
use Scraper\ScraperPrestashop\Entity\PrestashopProductFeatures;
use Scraper\ScraperPrestashop\Entity\PrestashopProductFeatureValue;
use Scraper\ScraperPrestashop\Entity\PrestashopProductFeatureValues;
use Scraper\ScraperPrestashop\Entity\PrestashopProductOption;
use Scraper\ScraperPrestashop\Entity\PrestashopProductOptions;
use Scraper\ScraperPrestashop\Entity\PrestashopProductOptionValue;
use Scraper\ScraperPrestashop\Entity\PrestashopProductOptionValues;
use Scraper\ScraperPrestashop\Entity\PrestashopProducts;
use Scraper\ScraperPrestashop\Entity\PrestashopState;
use Scraper\ScraperPrestashop\Entity\PrestashopStates;
use Scraper\ScraperPrestashop\Entity\PrestashopStockAvailable;
use Scraper\ScraperPrestashop\Entity\PrestashopStockAvailables;
use Scraper\ScraperPrestashop\Entity\Rem42Webservices\Colissimo\PrestashopPickupPoint;
use Scraper\ScraperPrestashop\Entity\Rem42Webservices\Colissimo\PrestashopPickupPoints;
use Scraper\ScraperPrestashop\Entity\Rem42Webservices\Tnt\PrestashopTntofficielCart;
use Scraper\ScraperPrestashop\Entity\Rem42Webservices\Tnt\PrestashopTntofficielOrder;
use Scraper\ScraperPrestashop\Entity\Rem42Webservices\Tnt\PrestashopTntofficielReceiver;
use Scraper\ScraperPrestashop\Exception\PrestashopResouceMappingNotFoundException;
use Scraper\ScraperPrestashop\Request\PrestashopPostRequest;
use Scraper\ScraperPrestashop\Request\PrestashopPutRequest;
use Scraper\ScraperPrestashop\Request\PrestashopRequest;

class ResourceMapping
{
    public const resourcesMapping = [
        'addresses' => [
            'list' => PrestashopAddresses::class,
            'one' => PrestashopAddress::class,
            'singular' => 'address',
        ],
        'carriers' => [
            'list' => PrestashopCarriers::class,
            'one' => PrestashopCarrier::class,
            'singular' => 'carrier',
        ],
        'cart_rules' => [
            'list' => PrestashopCartRules::class,
            'one' => PrestashopCartRule::class,
            'singular' => 'cart_rule',
        ],
        'carts' => [
            'list' => PrestashopCarts::class,
            'one' => PrestashopCart::class,
            'singular' => 'cart',
        ],
        'categories' => [
            'list' => PrestashopCategories::class,
            'one' => PrestashopCategory::class,
            'singular' => 'category',
        ],
        'combinations' => [
            'list' => PrestashopCombinations::class,
            'one' => PrestashopCombination::class,
            'singular' => 'combination',
        ],
        'configurations' => [
            'list' => PrestashopConfigurations::class,
            'one' => PrestashopConfiguration::class,
            'singular' => 'configuration',
        ],
        'contacts' => [
            'list' => PrestashopContacts::class,
            'one' => PrestashopContact::class,
            'singular' => 'contact',
        ],
        'content_management_system' => [
            'list' => PrestashopContentManagementSystem::class,
            'one' => PrestashopContentManagementSystem::class,
            'singular' => 'content_management_system',
        ],
        'countries' => [
            'list' => PrestashopCountries::class,
            'one' => PrestashopCountry::class,
            'singular' => 'country',
        ],
        'currencies' => [
            'list' => '',
            'one' => '',
            'singular' => 'currency',
        ],
        'customer_messages' => [
            'list' => '',
            'one' => '',
            'singular' => 'customer_message',
        ],
        'customer_threads' => [
            'list' => '',
            'one' => '',
            'singular' => 'customer_thread',
        ],
        'customers' => [
            'list' => PrestashopCustomers::class,
            'one' => PrestashopCustomer::class,
            'singular' => 'customer',
        ],
        'customizations' => [
            'list' => '',
            'one' => '',
            'singular' => 'customizations',
        ],
        'deliveries' => [
            'list' => '',
            'one' => '',
            'singular' => 'delivery',
        ],
        'description' => [
            'list' => '',
            'one' => '',
            'singular' => 'description',
        ],
        'employees' => [
            'list' => '',
            'one' => '',
            'singular' => 'employee',
        ],
        'groups' => [
            'list' => '',
            'one' => '',
            'singular' => 'group',
        ],
        'guests' => [
            'list' => '',
            'one' => '',
            'singular' => 'guest',
        ],
        'image_types' => [
            'list' => '',
            'one' => '',
            'singular' => 'image_type',
        ],
        'images' => [
            'list' => PrestashopImages::class,
            'one' => PrestashopImage::class,
            'singular' => 'image',
        ],
        'languages' => [
            'list' => '',
            'one' => '',
            'singular' => 'language',
        ],
        'manufacturers' => [
            'list' => '',
            'one' => '',
            'singular' => 'manufacturer',
        ],
        'messages' => [
            'list' => '',
            'one' => '',
            'singular' => 'message',
        ],
        'order_carriers' => [
            'list' => PrestashopOrderCarriers::class,
            'one' => PrestashopOrderCarrier::class,
            'singular' => 'order_carrier',
        ],
        'order_details' => [
            'list' => '',
            'one' => '',
            'singular' => 'order_detail',
        ],
        'order_histories' => [
            'list' => PrestashopOrderHistories::class,
            'one' => PrestashopOrderHistory::class,
            'singular' => 'order_history',
        ],
        'order_invoices' => [
            'list' => PrestashopOrderInvoices::class,
            'one' => PrestashopOrderInvoice::class,
            'singular' => 'order_invoice',
        ],
        'order_payments' => [
            'list' => '',
            'one' => '',
            'singular' => 'order_payment',
        ],
        'order_slip' => [
            'list' => '',
            'one' => '',
            'singular' => 'order_slip',
        ],
        'order_states' => [
            'list' => PrestashopOrderStates::class,
            'one' => PrestashopOrderState::class,
            'singular' => 'order_state',
        ],
        'orders' => [
            'list' => PrestashopOrders::class,
            'one' => PrestashopOrder::class,
            'singular' => 'order',
        ],
        'price_ranges' => [
            'list' => '',
            'one' => '',
            'singular' => 'price_range',
        ],
        'product_customization_fields' => [
            'list' => '',
            'one' => '',
            'singular' => 'product_customization_field',
        ],
        'product_feature_values' => [
            'list' => PrestashopProductFeatureValues::class,
            'one' => PrestashopProductFeatureValue::class,
            'singular' => 'product_feature_value',
        ],
        'product_features' => [
            'list' => PrestashopProductFeatures::class,
            'one' => PrestashopProductFeature::class,
            'singular' => 'product_feature',
        ],
        'product_option_values' => [
            'list' => PrestashopProductOptionValues::class,
            'one' => PrestashopProductOptionValue::class,
            'singular' => 'product_option_value',
        ],
        'product_options' => [
            'list' => PrestashopProductOptions::class,
            'one' => PrestashopProductOption::class,
            'singular' => 'product_option',
        ],
        'product_suppliers' => [
            'list' => '',
            'one' => '',
            'singular' => 'product_supplier',
        ],
        'products' => [
            'list' => PrestashopProducts::class,
            'one' => PrestashopProduct::class,
            'singular' => 'product',
        ],
        'search' => [
            'list' => '',
            'one' => '',
            'singular' => 'search',
        ],
        'shop_groups' => [
            'list' => '',
            'one' => '',
            'singular' => 'shop_group',
        ],
        'shop_urls' => [
            'list' => '',
            'one' => '',
            'singular' => 'shop_url',
        ],
        'shops' => [
            'list' => '',
            'one' => '',
            'singular' => 'shop',
        ],
        'specific_management' => [
            'list' => '',
            'one' => '',
            'singular' => 'specific_management',
        ],
        'specific_price_rules' => [
            'list' => '',
            'one' => '',
            'singular' => 'specific_price_rule',
        ],
        'specific_prices' => [
            'list' => '',
            'one' => '',
            'singular' => 'specific_price',
        ],
        'states' => [
            'list' => PrestashopStates::class,
            'one' => PrestashopState::class,
            'singular' => 'state',
        ],
        'stock_availables' => [
            'list' => PrestashopStockAvailables::class,
            'one' => PrestashopStockAvailable::class,
            'singular' => 'stock_available',
        ],
        'stock_movement_reasons' => [
            'list' => '',
            'one' => '',
            'singular' => 'stock_movement_reason',
        ],
        'stock_movements' => [
            'list' => '',
            'one' => '',
            'singular' => 'stock_movement',
        ],
        'stocks' => [
            'list' => '',
            'one' => '',
            'singular' => 'stock',
        ],
        'stores' => [
            'list' => '',
            'one' => '',
            'singular' => 'store',
        ],
        'suppliers' => [
            'list' => '',
            'one' => '',
            'singular' => 'supplier',
        ],
        'supply_order_details' => [
            'list' => '',
            'one' => '',
            'singular' => 'supply_order_detail',
        ],
        'supply_order_histories' => [
            'list' => '',
            'one' => '',
            'singular' => 'supply_order_history',
        ],
        'supply_order_receipt_histories' => [
            'list' => '',
            'one' => '',
            'singular' => 'supply_order_receipt_history',
        ],
        'supply_order_states' => [
            'list' => '',
            'one' => '',
            'singular' => 'supply_order_states',
        ],
        'supply_orders' => [
            'list' => '',
            'one' => '',
            'singular' => 'supply_order',
        ],
        'tags' => [
            'list' => '',
            'one' => '',
            'singular' => 'tag',
        ],
        'tax_rule_groups' => [
            'list' => '',
            'one' => '',
            'singular' => 'tax_rule_group',
        ],
        'tax_rules' => [
            'list' => '',
            'one' => '',
            'singular' => 'tax_rule',
        ],
        'taxes' => [
            'list' => '',
            'one' => '',
            'singular' => 'tax',
        ],
        'translated_configurations' => [
            'list' => '',
            'one' => '',
            'singular' => 'translated_configuration',
        ],
        'warehouse_product_locations' => [
            'list' => '',
            'one' => '',
            'singular' => 'warehouse_product_location',
        ],
        'warehouses' => [
            'list' => '',
            'one' => '',
            'singular' => 'warehouse',
        ],
        'weight_ranges' => [
            'list' => '',
            'one' => '',
            'singular' => 'weight_range',
        ],
        'zones' => [
            'list' => '',
            'one' => '',
            'singular' => 'zone',
        ],
        'rem42_webservices/colissimo/pickup_points' => [
            'list' => PrestashopPickupPoints::class,
            'one' => PrestashopPickupPoint::class,
            'singular' => 'pickup_point',
        ],
        'rem42_webservices/tnt/tntofficiel_receiver' => [
            'list' => '',
            'one' => PrestashopTntofficielReceiver::class,
            'singular' => 'tntofficiel_receiver',
        ],
        'rem42_webservices/tnt/tntofficiel_order' => [
            'list' => '',
            'one' => PrestashopTntofficielOrder::class,
            'singular' => 'tntofficiel_order',
        ],
        'rem42_webservices/tnt/tntofficiel_cart' => [
            'list' => '',
            'one' => PrestashopTntofficielCart::class,
            'singular' => 'tntofficiel_cart',
        ],
        'rem42_webservices/orders/invoices' => [
            'isFile' => true,
        ],
        'package_types' => [
            'list' => PrestashopPackageTypes::class,
            'one' => PrestashopPackageType::class,
            'singular' => 'package_type',
        ],
        'packages' => [
            'list' => PrestashopPackages::class,
            'one' => PrestashopPackage::class,
            'singular' => 'package',
        ],
    ];

    public static function find(PrestashopRequest $prestashopRequest): string
    {
        if (!isset(self::resourcesMapping[$prestashopRequest->getResource()])) {
            throw new PrestashopResouceMappingNotFoundException('cannot found this resource: ' . $prestashopRequest->getResource());
        }

        $resource = self::resourcesMapping[$prestashopRequest->getResource()];

        if ($prestashopRequest->getId()
            || $prestashopRequest instanceof PrestashopPostRequest
            || $prestashopRequest instanceof PrestashopPutRequest
        ) {
            if (!isset($resource['one'])) {
                throw new PrestashopResouceMappingNotFoundException('cannot found one for this resource: ' . $prestashopRequest->getResource());
            }
            return $resource['one'];
        }

        if (!isset($resource['list'])) {
            throw new PrestashopResouceMappingNotFoundException('cannot found list for this resource: ' . $prestashopRequest->getResource());
        }
        return $resource['list'];
    }

    public static function singularize(PrestashopRequest $prestashopGetRequest): string
    {
        if (!isset(self::resourcesMapping[$prestashopGetRequest->getResource()])) {
            throw new PrestashopResouceMappingNotFoundException('cannot found this resource:' . $prestashopGetRequest->getResource());
        }

        $resource = self::resourcesMapping[$prestashopGetRequest->getResource()];

        if (!isset($resource['singular'])) {
            throw new PrestashopResouceMappingNotFoundException('cannot found singular for this resource: ' . $prestashopGetRequest->getResource());
        }

        return $resource['singular'];
    }

    public static function isFile(PrestashopRequest $prestashopGetRequest): bool
    {
        if (!isset(self::resourcesMapping[$prestashopGetRequest->getResource()])) {
            throw new PrestashopResouceMappingNotFoundException('cannot found this resource:' . $prestashopGetRequest->getResource());
        }

        $resource = self::resourcesMapping[$prestashopGetRequest->getResource()];

        return $resource['isFile'] ?? false;
    }
}
