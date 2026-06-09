<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CloudflareTunnelConnectionsConnsItem
{
	public function __construct(
		public ?array $clientId = null,
		public ?array $clientVersion = null,
		public ?array $coloName = null,
		public ?array $id = null,
		public ?array $isPendingReconnect = null,
		/** Timestamp of when the connection was established. */
		public ?\DateTimeImmutable $openedAt = null,
		/** The public IP address of the host running cloudflared. */
		public mixed $originIp = null,
		public ?array $uuid = null,
	) {
	}
}
