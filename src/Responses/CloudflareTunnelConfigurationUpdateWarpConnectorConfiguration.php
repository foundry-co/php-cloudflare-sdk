<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CloudflareTunnelConfigurationUpdateWarpConnectorConfiguration
{
	public function __construct(
		/** Monotonically increasing configuration version, incremented on each PUT. */
		public ?int $configurationVersion = null,
		/** Timestamp of when the resource was created. */
		public ?\DateTimeImmutable $createdAt = null,
		/** High-availability mode for the WARP Connector tunnel. `none` means HA is enabled but no provider is configured yet (newly created tunnels default to this). `disabled` means HA is explicitly turned off. `aws` uses AWS ENI move for failover. `local` uses virtual IPs (VIPs) on the local interface. */
		public ?\FoundryCo\Cloudflare\Enums\CloudflareTunnelConfigurationUpdateWarpConnectorConfigurationHaMode $haMode = null,
		/** UUID of the tunnel. */
		public ?string $tunnelId = null,
		/** Provider-specific configuration. Present for `aws` and `local` modes. */
		public mixed $config = null,
		/** Timestamp of the last update. Null if never updated. */
		public ?\DateTimeImmutable $updatedAt = null,
	) {
	}
}
