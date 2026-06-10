<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetDnsSummaryByResponseTtlSummary0
{
	public function __construct(
		/** A numeric string. */
		public ?string $gt15mLte1h = null,
		/** A numeric string. */
		public ?string $gt1dLte1w = null,
		/** A numeric string. */
		public ?string $gt1hLte1d = null,
		/** A numeric string. */
		public ?string $gt1mLte5m = null,
		/** A numeric string. */
		public ?string $gt1w = null,
		/** A numeric string. */
		public ?string $gt5mLte15m = null,
		/** A numeric string. */
		public ?string $lte1m = null,
	) {
	}
}
