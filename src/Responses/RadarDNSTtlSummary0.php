<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarDNSTtlSummary0
{
	public function __construct(
		/** A numeric string. */
		public string $gt15mLte1h,
		/** A numeric string. */
		public string $gt1dLte1w,
		/** A numeric string. */
		public string $gt1hLte1d,
		/** A numeric string. */
		public string $gt1mLte5m,
		/** A numeric string. */
		public string $gt1w,
		/** A numeric string. */
		public string $gt5mLte15m,
		/** A numeric string. */
		public string $lte1m,
	) {
	}
}
