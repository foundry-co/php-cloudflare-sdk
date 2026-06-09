<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AIGatewayPreview
{
	public function __construct(
		public float $amountDue,
		public float $amountPaid,
		public float $amountRemaining,
		public string $currency,
		public string $id,
		public array $invoiceLines,
		public float $periodEnd,
		public float $periodStart,
		public \FoundryCo\Cloudflare\Enums\AIGatewayPreviewStatus $status,
	) {
	}
}
