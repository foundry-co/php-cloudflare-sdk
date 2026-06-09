<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarBGPRealtimeMetaPrefixOriginsItem
{
	public function __construct(
		/** Origin ASN. */
		public int $origin,
		/** IP prefix of this query. */
		public string $prefix,
		/** Prefix-origin RPKI validation: valid, invalid, unknown. */
		public string $rpkiValidation,
		/** Total number of peers. */
		public int $totalPeers,
		/** Total number of peers seeing this prefix. */
		public int $totalVisible,
		/** Ratio of peers seeing this prefix to total number of peers. */
		public float $visibility,
	) {
	}
}
