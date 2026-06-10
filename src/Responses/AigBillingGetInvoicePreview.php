<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AigBillingGetInvoicePreview
{
	public function __construct(
		public ?float $amountDue = null,
		public ?float $amountPaid = null,
		public ?float $amountRemaining = null,
		public ?string $currency = null,
		public ?string $id = null,
		public ?array $invoiceLines = null,
		public ?float $periodEnd = null,
		public ?float $periodStart = null,
		public ?\FoundryCo\Cloudflare\Enums\AigBillingGetInvoicePreviewStatus $status = null,
	) {
	}
}
