<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A PSK entry for a specific IPsec tunnel.
 */
readonly class MagicIpsecTunnelsSetPreSharedKeysForIpsecTunnelsRequestPsksItem
{
	public function __construct(
		/** The ID of the IPsec tunnel. */
		public mixed $id = null,
		/** A randomly generated or provided string for use in the IPsec tunnel. */
		public ?string $psk = null,
	) {
	}
}
