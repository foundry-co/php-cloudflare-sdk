<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update an entire account configuration
 */
readonly class MagicNetworkMonitoringConfigurationUpdateAnEntireAccountConfigurationRequest
{
	public function __construct(
		/** Fallback sampling rate of flow messages being sent in packets per second. This should match the packet sampling rate configured on the router. */
		public float $defaultSampling,
		/** The account name. */
		public string $name,
		public ?array $routerIps = null,
		public ?array $warpDevices = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'default_sampling' => $this->defaultSampling,
		    'name' => $this->name,
		    'router_ips' => $this->routerIps,
		    'warp_devices' => $this->warpDevices,
		], fn ($v) => $v !== null);
	}
}
