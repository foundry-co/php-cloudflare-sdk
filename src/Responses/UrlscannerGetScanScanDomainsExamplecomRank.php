<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UrlscannerGetScanScanDomainsExamplecomRank
{
	public function __construct(
		public ?string $bucket = null,
		public ?string $name = null,
		/** Rank in the Global Radar Rank, if set. See more at https://blog.cloudflare.com/radar-domain-rankings/ */
		public ?int $rank = null,
	) {
	}
}
