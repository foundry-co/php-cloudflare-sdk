<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The PSK metadata that includes when the PSK was generated.
 */
readonly class MagicIpsecTunnelsUpdateMultipleIpsecTunnelsModifiedIpsecTunnelsItemPskMetadata
{
	public function __construct(
		/** The date and time the tunnel was last modified. */
		public ?\DateTimeImmutable $lastGeneratedOn = null,
	) {
	}
}
