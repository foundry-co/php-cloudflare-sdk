<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update hostname route
 */
readonly class ZeroTrustNetworksRouteHostnameUpdateRequest
{
	public function __construct(
		/** An optional description of the hostname route. */
		public ?string $comment = null,
		/** The hostname of the route. */
		public ?string $hostname = null,
		/** UUID of the tunnel. */
		public ?string $tunnelId = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'comment' => $this->comment,
		    'hostname' => $this->hostname,
		    'tunnel_id' => $this->tunnelId,
		], fn ($v) => $v !== null);
	}
}
