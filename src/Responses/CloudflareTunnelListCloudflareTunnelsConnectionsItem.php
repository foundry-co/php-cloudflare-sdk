<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CloudflareTunnelListCloudflareTunnelsConnectionsItem
{
	public function __construct(
		/** UUID of the Cloudflare Tunnel connector. */
		public ?string $clientId = null,
		/** The cloudflared version used to establish this connection. */
		public ?string $clientVersion = null,
		/** The Cloudflare data center used for this connection. */
		public ?string $coloName = null,
		/** UUID of the Cloudflare Tunnel connection. */
		public ?string $id = null,
		/** Cloudflare continues to track connections for several minutes after they disconnect. This is an optimization to improve latency and reliability of reconnecting.  If `true`, the connection has disconnected but is still being tracked. If `false`, the connection is actively serving traffic. */
		public ?bool $isPendingReconnect = null,
		/** Timestamp of when the connection was established. */
		public ?\DateTimeImmutable $openedAt = null,
		/** The public IP address of the host running cloudflared. */
		public mixed $originIp = null,
		/** UUID of the Cloudflare Tunnel connection. */
		public ?string $uuid = null,
	) {
	}
}
