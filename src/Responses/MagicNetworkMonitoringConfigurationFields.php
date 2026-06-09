<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicNetworkMonitoringConfigurationFields
{
	public function __construct(
		/** Fallback sampling rate of flow messages being sent in packets per second. This should match the packet sampling rate configured on the router. */
		public float $defaultSampling,
		/** The account name. */
		public string $name,
		public array $routerIps,
		public array $warpDevices,
	) {
	}
}
