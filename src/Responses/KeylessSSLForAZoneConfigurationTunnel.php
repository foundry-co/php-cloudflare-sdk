<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configuration for using Keyless SSL through a Cloudflare Tunnel.
 */
readonly class KeylessSSLForAZoneConfigurationTunnel
{
	public function __construct(
		public array $privateIp,
		public array $vnetId,
	) {
	}
}
