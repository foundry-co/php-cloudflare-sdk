<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetBgpRoutesRealtimeMetaPrefixOriginsItem
{
	public function __construct(
		/** Origin ASN. */
		public ?int $origin = null,
		/** IP prefix of this query. */
		public ?string $prefix = null,
		/** Prefix-origin RPKI validation: valid, invalid, unknown. */
		public ?string $rpkiValidation = null,
		/** Total number of peers. */
		public ?int $totalPeers = null,
		/** Total number of peers seeing this prefix. */
		public ?int $totalVisible = null,
		/** Ratio of peers seeing this prefix to total number of peers. */
		public ?float $visibility = null,
	) {
	}
}
