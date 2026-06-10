<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Set auto top-up configuration
 */
readonly class AigBillingSetTopupConfigRequest
{
	public function __construct(
		/** Auto top-up amount in cents (min 1000). */
		public int $amount,
		/** Balance threshold in cents that triggers auto top-up (min 500). */
		public int $threshold,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'amount' => $this->amount,
		    'threshold' => $this->threshold,
		], fn ($v) => $v !== null);
	}
}
