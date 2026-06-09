<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AIGatewayHistoryInvoicesItem
{
	public function __construct(
		public float $amountDue,
		public float $amountPaid,
		public float $amountRemaining,
		public string $currency,
		public ?float $attemptCount = null,
		public ?bool $attempted = null,
		public ?bool $autoAdvance = null,
		public ?float $created = null,
		public ?string $createdBy = null,
		public ?string $description = null,
		public ?string $id = null,
		public ?string $invoiceOrigin = null,
		public ?string $invoicePdf = null,
		public ?string $status = null,
	) {
	}
}
