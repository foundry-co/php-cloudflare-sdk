<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetRankingTopDomainsTop0Item
{
	public function __construct(
		public ?array $categories = null,
		public ?string $domain = null,
		public ?int $rank = null,
		/** Only available in TRENDING rankings. */
		public ?float $pctRankChange = null,
	) {
	}
}
