<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CloudflareTunnelListWarpConnectorTunnelConnectionsConnsItem
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
		/** Timestamp of when the connection was established. */
		public ?\DateTimeImmutable $openedAt = null,
		/** The public IP address of the host running WARP Connector. */
		public mixed $originIp = null,
	) {
	}
}
