<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetHttpSummaryByHttpVersionSummary0
{
	public function __construct(
		/** A numeric string. */
		public ?string $hTTP1x = null,
		/** A numeric string. */
		public ?string $hTTP2 = null,
		/** A numeric string. */
		public ?string $hTTP3 = null,
	) {
	}
}
