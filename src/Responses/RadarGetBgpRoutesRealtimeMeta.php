<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetBgpRoutesRealtimeMeta
{
	public function __construct(
		public ?array $asnInfo = null,
		public ?array $collectors = null,
		/** The most recent data timestamp for from the real-time sources. */
		public ?string $dataTime = null,
		public ?array $prefixOrigins = null,
		/** The timestamp of this query. */
		public ?string $queryTime = null,
	) {
	}
}
