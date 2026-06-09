<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Trigger a manual failover for a WARP Connector Tunnel
 */
readonly class CloudflareTunnelManualFailoverWarpConnectorTunnelRequest
{
	public function __construct(
		/** UUID of the Cloudflare Tunnel connector. */
		public string $clientId,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'client_id' => $this->clientId,
		], fn ($v) => $v !== null);
	}
}
