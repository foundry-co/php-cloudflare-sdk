<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a tunnel route
 */
readonly class TunnelRouteUpdateATunnelRouteRequest
{
	public function __construct(
		/** Optional remark describing the route. */
		public ?string $comment = null,
		/** The private IPv4 or IPv6 range connected by the route, in CIDR notation. */
		public ?string $network = null,
		/** UUID of the tunnel. */
		public ?string $tunnelId = null,
		/** UUID of the virtual network. */
		public ?string $virtualNetworkId = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'comment' => $this->comment,
		    'network' => $this->network,
		    'tunnel_id' => $this->tunnelId,
		    'virtual_network_id' => $this->virtualNetworkId,
		], fn ($v) => $v !== null);
	}
}
