<?php

namespace Scraper\ScraperPrestashop\Entity;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class PrestashopPost
 * @package Scraper\ScraperPrestashop\Entity
 *
 * @Serializer\XmlRoot(name="prestashop")
 * @Serializer\XmlNamespace(uri="http://www.w3.org/1999/xlink", prefix="xlink")
 */
class PrestashopPost
{
	/**
	 * @var PrestashopOrderHistory
	 * @Serializer\Type("Scraper\ScraperPrestashop\Entity\PrestashopOrderHistory")
	 * @Serializer\SerializedName("order_history")
	 */
	protected $orderHistory;
	/**
	 * @var PrestashopStockAvailable
	 * @Serializer\Type("Scraper\ScraperPrestashop\Entity\PrestashopStockAvailable")
	 * @Serializer\SerializedName("stock_available")
	 */
	protected $stockAvailable;

	/**
	 * @return PrestashopOrderHistory
	 */
	public function getOrderHistory(): ?PrestashopOrderHistory
	{
		return $this->orderHistory;
	}

	/**
	 * @param PrestashopOrderHistory $orderHistory
	 * @return $this
	 */
	public function setOrderHistory(?PrestashopOrderHistory $orderHistory)
	{
		$this->orderHistory = $orderHistory;
		return $this;
	}

	/**
	 * @return PrestashopStockAvailable
	 */
	public function getStockAvailable(): ?PrestashopStockAvailable
	{
		return $this->stockAvailable;
	}

	/**
	 * @param PrestashopStockAvailable $stockAvailable
	 *
	 * @return $this
	 */
	public function setStockAvailable(?PrestashopStockAvailable $stockAvailable)
	{
		$this->stockAvailable = $stockAvailable;
		return $this;
	}
}