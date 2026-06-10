<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a tunnel route
 */
readonly class TunnelRouteCreateATunnelRouteRequest
{
	public function __construct(
		/** The private IPv4 or IPv6 range connected by the route, in CIDR notation. */
		public string $network,
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
		    'network' => $this->network,
		    'tunnel_id' => $this->tunnelId,
		    'comment' => $this->comment,
		    'virtual_network_id' => $this->virtualNetworkId,
		], fn ($v) => $v !== null);
	}
}
