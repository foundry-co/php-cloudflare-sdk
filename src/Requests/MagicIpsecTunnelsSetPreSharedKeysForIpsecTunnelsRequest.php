<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Set Pre-Shared Keys (PSK) for IPsec tunnels
 */
readonly class MagicIpsecTunnelsSetPreSharedKeysForIpsecTunnelsRequest
{
	public function __construct(
		/** List of tunnel ID and PSK pairs. */
		public array $psks,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'psks' => $this->psks,
		], fn ($v) => $v !== null);
	}
}
