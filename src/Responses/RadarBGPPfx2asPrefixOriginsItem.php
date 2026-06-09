<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarBGPPfx2asPrefixOriginsItem
{
	public function __construct(
		public int $origin,
		public int $peerCount,
		public string $prefix,
		public string $rpkiValidation,
	) {
	}
}
