<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A client (typically cloudflared) that maintains connections to a Cloudflare data center.
 */
readonly class CloudflareTunnelConnections
{
	public function __construct(
		/** The cloudflared OS architecture used to establish this connection. */
		public ?string $arch = null,
		/** The version of the remote tunnel configuration. Used internally to sync cloudflared with the Zero Trust dashboard. */
		public ?int $configVersion = null,
		/** The Cloudflare Tunnel connections between your origin and Cloudflare's edge. */
		public ?array $conns = null,
		/** Features enabled for the Cloudflare Tunnel. */
		public ?array $features = null,
		/** UUID of the Cloudflare Tunnel connection. */
		public ?string $id = null,
		/** Timestamp of when the tunnel connection was started. */
		public ?\DateTimeImmutable $runAt = null,
		/** The cloudflared version used to establish this connection. */
		public ?string $version = null,
	) {
	}
}
