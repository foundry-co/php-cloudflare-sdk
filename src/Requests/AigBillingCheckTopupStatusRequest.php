<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Check top-up status
 */
readonly class AigBillingCheckTopupStatusRequest
{
	public function __construct(
		/** Stripe invoice ID to check status for. */
		public string $paymentIntentId,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'payment_intent_id' => $this->paymentIntentId,
		], fn ($v) => $v !== null);
	}
}
