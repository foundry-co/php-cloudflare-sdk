<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicNetworkMonitoringConfigurationCreateAccountConfiguration
{
	public function __construct(
		/** Fallback sampling rate of flow messages being sent in packets per second. This should match the packet sampling rate configured on the router. */
		public ?float $defaultSampling = null,
		/** The account name. */
		public ?string $name = null,
		public ?array $routerIps = null,
		public ?array $warpDevices = null,
	) {
	}
}
