<?php declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Entity;

final class PrestashopOrderInvoices
{
    /** @var array<int, PrestashopOrderInvoice> */
    public array $orderInvoices = [];

    public function addOrderInvoice(PrestashopOrderInvoice $orderInvoice): self
    {
        $this->orderInvoices[] = $orderInvoice;

        return $this;
    }
}
