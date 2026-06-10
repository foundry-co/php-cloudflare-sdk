<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ApiShieldApiDiscoveryRetrieveDiscoveredOperationByIdFeaturesTrafficStats
{
	public function __construct(
		public mixed $lastUpdated = null,
		/** The period in seconds these statistics were computed over */
		public ?int $periodSeconds = null,
		/** The average number of requests seen during this period */
		public ?float $requests = null,
	) {
	}
}
