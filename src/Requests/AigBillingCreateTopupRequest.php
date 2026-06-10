<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a top-up
 */
readonly class AigBillingCreateTopupRequest
{
	public function __construct(
		/** Top-up amount in cents (min 1000). */
		public int $amount,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'amount' => $this->amount,
		], fn ($v) => $v !== null);
	}
}
