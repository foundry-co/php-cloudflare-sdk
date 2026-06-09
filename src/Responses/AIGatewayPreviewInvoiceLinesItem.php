<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AIGatewayPreviewInvoiceLinesItem
{
	public function __construct(
		public float $amount,
		public string $currency,
		public string $description,
		public AIGatewayPreviewInvoiceLinesItemPeriod $period,
		public AIGatewayPreviewInvoiceLinesItemPricing $pricing,
		public float $quantity,
		public ?array $pretaxCreditAmounts = null,
	) {
	}
}
