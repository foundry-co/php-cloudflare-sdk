<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Cloud vendors and their supported regions for origin cloud region mappings.
 */
readonly class OriginCloudRegionsRegions
{
	public function __construct(
		/** Whether Cloudflare airport codes (IATA colo identifiers) were successfully resolved for the `upper_tier_colos` field on each region. When `false`, the `upper_tier_colos` arrays may be empty or incomplete. */
		public bool $obtainedCodes,
		/** Map of vendor name to list of supported regions. */
		public array $vendors,
	) {
	}
}
