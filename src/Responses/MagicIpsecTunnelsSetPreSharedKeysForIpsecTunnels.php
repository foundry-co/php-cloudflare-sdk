<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicIpsecTunnelsSetPreSharedKeysForIpsecTunnels
{
	public function __construct(
		/** Map of tunnel IDs to successfully applied PSK details. */
		public ?array $successfullyAppliedPsks = null,
		/** Map of tunnel IDs to failure reasons for PSKs that could not be applied. */
		public ?array $unappliedPsks = null,
	) {
	}
}
