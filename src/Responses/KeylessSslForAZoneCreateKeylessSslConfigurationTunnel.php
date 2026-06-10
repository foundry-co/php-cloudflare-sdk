<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configuration for using Keyless SSL through a Cloudflare Tunnel.
 */
readonly class KeylessSslForAZoneCreateKeylessSslConfigurationTunnel
{
	public function __construct(
		/** Private IP of the Key Server Host. */
		public ?string $privateIp = null,
		/** Cloudflare Tunnel Virtual Network ID. */
		public ?string $vnetId = null,
	) {
	}
}
