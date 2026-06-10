<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AigBillingGetInvoiceHistoryInvoicesItem
{
	public function __construct(
		public ?float $amountDue = null,
		public ?float $amountPaid = null,
		public ?float $amountRemaining = null,
		public ?string $currency = null,
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
