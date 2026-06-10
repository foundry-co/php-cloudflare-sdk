<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AigBillingGetInvoicePreviewInvoiceLinesItem
{
	public function __construct(
		public ?float $amount = null,
		public ?string $currency = null,
		public ?string $description = null,
		public ?AigBillingGetInvoicePreviewInvoiceLinesItemPeriod $period = null,
		public ?AigBillingGetInvoicePreviewInvoiceLinesItemPricing $pricing = null,
		public ?float $quantity = null,
		public ?array $pretaxCreditAmounts = null,
	) {
	}
}
