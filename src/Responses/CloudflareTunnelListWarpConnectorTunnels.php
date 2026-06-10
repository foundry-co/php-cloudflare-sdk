<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A Warp Connector Tunnel that connects your origin to Cloudflare's edge.
 */
readonly class CloudflareTunnelListWarpConnectorTunnels
{
	public function __construct(
		/** Cloudflare account ID */
		public ?string $accountTag = null,
		/** The Cloudflare Tunnel connections between your origin and Cloudflare's edge. */
		public ?array $connections = null,
		/** Timestamp of when the tunnel established at least one connection to Cloudflare's edge. If `null`, the tunnel is inactive. */
		public ?\DateTimeImmutable $connsActiveAt = null,
		/** Timestamp of when the tunnel became inactive (no connections to Cloudflare's edge). If `null`, the tunnel is active. */
		public ?\DateTimeImmutable $connsInactiveAt = null,
		/** Timestamp of when the resource was created. */
		public ?\DateTimeImmutable $createdAt = null,
		/** Timestamp of when the resource was deleted. If `null`, the resource has not been deleted. */
		public ?\DateTimeImmutable $deletedAt = null,
		/** UUID of the tunnel. */
		public ?string $id = null,
		/** Metadata associated with the tunnel. */
		public ?array $metadata = null,
		/** A user-friendly name for a tunnel. */
		public ?string $name = null,
		/** The status of the tunnel. Valid values are `inactive` (tunnel has never been run), `degraded` (tunnel is active and able to serve traffic but in an unhealthy state), `healthy` (tunnel is active and able to serve traffic), or `down` (tunnel can not serve traffic as it has no connections to the Cloudflare Edge). */
		public ?\FoundryCo\Cloudflare\Enums\CloudflareTunnelListWarpConnectorTunnelsStatus $status = null,
		/** The type of tunnel. */
		public ?\FoundryCo\Cloudflare\Enums\CloudflareTunnelListWarpConnectorTunnelsTunType $tunType = null,
	) {
	}
}
