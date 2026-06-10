<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicIpsecTunnelsGeneratePreSharedKeyPskForIpsecTunnels
{
	public function __construct(
		/** Identifier */
		public ?string $ipsecTunnelId = null,
		/** A randomly generated or provided string for use in the IPsec tunnel. */
		public ?string $psk = null,
		/** The PSK metadata that includes when the PSK was generated. */
		public ?MagicIpsecTunnelsGeneratePreSharedKeyPskForIpsecTunnelsPskMetadata $pskMetadata = null,
	) {
	}
}
