<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SpeedGetAvailabilities
{
	public function __construct(
		public ?SpeedGetAvailabilitiesQuota $quota = null,
		public ?array $regions = null,
		/** Available regions. */
		public ?SpeedGetAvailabilitiesRegionsPerPlan $regionsPerPlan = null,
	) {
	}
}
