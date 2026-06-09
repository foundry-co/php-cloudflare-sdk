<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a tunnel route (CIDR Endpoint)
 */
readonly class TunnelRouteCreateATunnelRouteWithCidrRequest
{
	public function __construct(
		/** UUID of the tunnel. */
		public string $tunnelId,
		/** Optional remark describing the route. */
		public ?string $comment = null,
		/** UUID of the virtual network. */
		public ?string $virtualNetworkId = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'tunnel_id' => $this->tunnelId,
		    'comment' => $this->comment,
		    'virtual_network_id' => $this->virtualNetworkId,
		], fn ($v) => $v !== null);
	}
}
