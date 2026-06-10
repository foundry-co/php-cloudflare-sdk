<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A WARP Connector client that maintains a connection to a Cloudflare data center.
 */
readonly class CloudflareTunnelListWarpConnectorTunnelConnections
{
	public function __construct(
		/** The cloudflared OS architecture used to establish this connection. */
		public ?string $arch = null,
		/** The WARP Connector Tunnel connections between your origin and Cloudflare's edge. */
		public ?array $conns = null,
		/** Features enabled for the Cloudflare Tunnel. */
		public ?array $features = null,
		/** The HA status of a WARP Connector client. */
		public ?\FoundryCo\Cloudflare\Enums\CloudflareTunnelListWarpConnectorTunnelConnectionsHaStatus $haStatus = null,
		/** UUID of the Cloudflare Tunnel connector. */
		public ?string $id = null,
		/** Timestamp of when the tunnel connection was started. */
		public ?\DateTimeImmutable $runAt = null,
		/** The cloudflared version used to establish this connection. */
		public ?string $version = null,
	) {
	}
}
