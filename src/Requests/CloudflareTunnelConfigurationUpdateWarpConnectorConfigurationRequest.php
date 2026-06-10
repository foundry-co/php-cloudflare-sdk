<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update WARP Connector HA configuration
 */
readonly class CloudflareTunnelConfigurationUpdateWarpConnectorConfigurationRequest
{
	public function __construct(
		/** High-availability mode for the WARP Connector tunnel. `none` means HA is enabled but no provider is configured yet (newly created tunnels default to this). `disabled` means HA is explicitly turned off. `aws` uses AWS ENI move for failover. `local` uses virtual IPs (VIPs) on the local interface. */
		public \FoundryCo\Cloudflare\Enums\CloudflareTunnelConfigurationUpdateWarpConnectorConfigurationRequestHaMode $haMode,
		/** Provider-specific configuration. Required shape depends on ha_mode. For `aws`, must contain `fnr_id`. For `local`, must contain `vips`. For `none` and `disabled`, must be empty or omitted. */
		public mixed $config = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'ha_mode' => $this->haMode->value,
		    'config' => $this->config,
		], fn ($v) => $v !== null);
	}
}
