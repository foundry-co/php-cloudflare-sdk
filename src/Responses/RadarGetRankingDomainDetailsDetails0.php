<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetRankingDomainDetailsDetails0
{
	public function __construct(
		public ?array $categories = null,
		/** Only available in POPULAR ranking for the most recent ranking. */
		public ?string $bucket = null,
		public ?int $rank = null,
		public ?array $topLocations = null,
	) {
	}
}
