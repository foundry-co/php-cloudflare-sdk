<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Set spending limit
 */
readonly class AigBillingSetSpendingLimitRequest
{
	public function __construct(
		/** Spending limit amount in cents (min 100). */
		public int $amount,
		/** Spending limit duration. */
		public \FoundryCo\Cloudflare\Enums\AigBillingSetSpendingLimitRequestDuration $duration,
		/** Spending limit strategy. */
		public \FoundryCo\Cloudflare\Enums\AigBillingSetSpendingLimitRequestStrategy $strategy,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'amount' => $this->amount,
		    'duration' => $this->duration->value,
		    'strategy' => $this->strategy->value,
		], fn ($v) => $v !== null);
	}
}
