<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a Warp Connector Tunnel
 */
readonly class CloudflareTunnelCreateAWarpConnectorTunnelRequest
{
	public function __construct(
		/** A user-friendly name for a tunnel. */
		public string $name,
		/** Indicates that the tunnel will be created to be highly available. If omitted, defaults to false. */
		public ?bool $ha = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'ha' => $this->ha,
		], fn ($v) => $v !== null);
	}
}
