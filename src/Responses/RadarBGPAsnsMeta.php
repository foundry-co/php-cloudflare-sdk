<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarBGPAsnsMeta
{
	public function __construct(
		/** The timestamp of when the data is generated. */
		public string $dataTime,
		/** The timestamp of the query. */
		public string $queryTime,
		/** Total number of route collector peers used to generate this data. */
		public int $totalPeers,
	) {
	}
}
