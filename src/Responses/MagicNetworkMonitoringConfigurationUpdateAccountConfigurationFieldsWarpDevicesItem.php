<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Object representing a warp device with an ID and name.
 */
readonly class MagicNetworkMonitoringConfigurationUpdateAccountConfigurationFieldsWarpDevicesItem
{
	public function __construct(
		/** Unique identifier for the warp device. */
		public ?string $id = null,
		/** Name of the warp device. */
		public ?string $name = null,
		/** IPv4 CIDR of the router sourcing flow data associated with this warp device. Only /32 addresses are currently supported. */
		public ?string $routerIp = null,
	) {
	}
}
