<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Updates the Zero Trust Connectivity Settings
 */
readonly class ZeroTrustAccountsPatchConnectivitySettingsRequest
{
	public function __construct(
		/** A flag to enable the ICMP proxy for the account network. */
		public ?bool $icmpProxyEnabled = null,
		/** A flag to enable WARP to WARP traffic. */
		public ?bool $offrampWarpEnabled = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'icmp_proxy_enabled' => $this->icmpProxyEnabled,
		    'offramp_warp_enabled' => $this->offrampWarpEnabled,
		], fn ($v) => $v !== null);
	}
}
