<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DEXSyntheticApplicationMonitoringLiveDeviceStats
{
	public function __construct(
		public ?array $byColo = null,
		public ?array $byMode = null,
		public ?array $byPlatform = null,
		public ?array $byStatus = null,
		public ?array $byVersion = null,
		/** Number of unique devices */
		public ?float $uniqueDevicesTotal = null,
	) {
	}
}
