<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetBgpRoutesAsnsMeta
{
	public function __construct(
		/** The timestamp of when the data is generated. */
		public ?string $dataTime = null,
		/** The timestamp of the query. */
		public ?string $queryTime = null,
		/** Total number of route collector peers used to generate this data. */
		public ?int $totalPeers = null,
	) {
	}
}
