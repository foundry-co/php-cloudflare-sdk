<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AIGatewayLimits
{
	public function __construct(
		/** ISO 4217 currency code. */
		public string $currency,
		public int $maxCents,
		/** Minimum allowed top-up amount in cents. */
		public int $minCents,
	) {
	}
}
