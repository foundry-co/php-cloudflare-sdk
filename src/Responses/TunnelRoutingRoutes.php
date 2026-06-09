<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TunnelRoutingRoutes
{
	public function __construct(
		/** Optional remark describing the route. */
		public ?string $comment = null,
		/** Timestamp of when the resource was created. */
		public ?\DateTimeImmutable $createdAt = null,
		/** Timestamp of when the resource was deleted. If `null`, the resource has not been deleted. */
		public ?\DateTimeImmutable $deletedAt = null,
		/** UUID of the route. */
		public ?string $id = null,
		/** The private IPv4 or IPv6 range connected by the route, in CIDR notation. */
		public ?string $network = null,
		/** The type of tunnel. */
		public ?\FoundryCo\Cloudflare\Enums\TunnelRoutingRoutesTunType $tunType = null,
		/** UUID of the tunnel. */
		public ?string $tunnelId = null,
		/** A user-friendly name for a tunnel. */
		public ?string $tunnelName = null,
		/** UUID of the virtual network. */
		public ?string $virtualNetworkId = null,
		/** A user-friendly name for the virtual network. */
		public ?string $virtualNetworkName = null,
	) {
	}
}
