<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a Cloudflare Tunnel
 */
readonly class CloudflareTunnelUpdateACloudflareTunnelRequest
{
	public function __construct(
		/** A user-friendly name for a tunnel. */
		public ?string $name = null,
		/** Sets the password required to run a locally-managed tunnel. Must be at least 32 bytes and encoded as a base64 string. */
		public ?string $tunnelSecret = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'tunnel_secret' => $this->tunnelSecret,
		], fn ($v) => $v !== null);
	}
}
