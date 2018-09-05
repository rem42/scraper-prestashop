<?php

namespace Scraper\ScraperPrestashop\Api;


use JMS\Serializer\SerializerBuilder;

class PrestashopPutApi extends PrestashopApi
{
	protected static $webservices = [
		'addresses',
		'carriers',
		'carts',
		'cart_rules',
		'categories',
		'combinations',
		'configurations',
		'contacts',
		'countries',
		'currencies',
		'customers',
		'customer_threads',
		'customer_messages',
		'deliveries',
		'groups',
		'guests',
		'images',
		'image_types',
		'languages',
		'manufacturers',
		'messages',
		'order_carriers',
		'order_details',
		'order_histories',
		'order_invoices',
		'orders',
		'order_payments',
		'order_states',
		'order_slip',
		'price_ranges',
		'product_features',
		'product_feature_values',
		'product_options',
		'product_option_values',
		'products',
		'states',
		'stores',
		'suppliers',
		'tags',
		'translated_configurations',
		'weight_ranges',
		'zones',
		'employees',
		'search',
		'content_management_system',
		'shops',
		'shop_groups',
		'taxes',
		'stock_movements',
		'stock_movement_reasons',
		'warehouses',
		'stocks',
		'stock_availables',
		'warehouse_product_locations',
		'supply_orders',
		'supply_order_details',
		'supply_order_states',
		'supply_order_histories',
		'supply_order_receipt_histories',
		'product_suppliers',
		'tax_rules',
		'tax_rule_groups',
		'specific_prices',
		'specific_price_rules',
		'shop_urls',
		'product_customization_fields',
		'customizations',
	];

	protected static $webservicesGet = [
		'address',
		'carrier',
		'cart',
		'cart_rule',
		'category',
		'combination',
		'configuration',
		'contact',
		'country',
		'currency',
		'customer',
		'customer_thread',
		'customer_message',
		'delivery',
		'group',
		'guest',
		'image',
		'image_type',
		'language',
		'manufacturer',
		'message',
		'order_carrier',
		'order_detail',
		'order_history',
		'order_invoice',
		'order',
		'order_payment',
		'order_state',
		'order_slip',
		'price_range',
		'product_feature',
		'product_feature_value',
		'product_option',
		'product_option_value',
		'product',
		'state',
		'store',
		'supplier',
		'tag',
		'translated_configuration',
		'weight_range',
		'zone',
		'employee',
		'search',
		'content_management_system',
		'shop',
		'shop_group',
		'taxe',
		'stock_movement',
		'stock_movement_reason',
		'warehouse',
		'stock',
		'stock_available',
		'warehouse_product_location',
		'supply_order',
		'supply_order_detail',
		'supply_order_state',
		'supply_order_history',
		'supply_order_receipt_history',
		'product_supplier',
		'tax_rule',
		'tax_rule_group',
		'specific_price',
		'specific_price_rule',
		'shop_url',
		'product_customization_field',
		'customization',
	];

	public function execute()
	{
		$dataToEncode = $this->data;
		$serializer = SerializerBuilder::create()
			->build()
		;
		$url = explode('/', $this->urlAnnotation->url);
		$url[0] = str_replace(self::$webservices, self::$webservicesGet, $url[0]);
		$entry = [
			'stock_movement' => 'stock_mvt'
		];
		if(isset($entry[$url[0]])){
			$dataToEncode = $this->data[$entry[$url[0]]];
		}else{
			$dataToEncode = $this->data[$url[0]];
		}
		$str = ucfirst(str_replace('_', '', ucwords($url[0], '_')));

		$type = "Scraper\ScraperPrestashop\Entity\Prestashop".ucfirst($str);

		$data = json_encode($dataToEncode);
		return $serializer->deserialize($data, $type, 'json');
	}
}
