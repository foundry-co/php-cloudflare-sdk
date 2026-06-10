<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetAttacksLayer3SummaryByDurationSummary0
{
	public function __construct(
		/** A numeric string. */
		public ?string $oVER3HOURS = null,
		/** A numeric string. */
		public ?string $uNDER10MINS = null,
		/** A numeric string. */
		public ?string $t10MINSTO20MINS = null,
		/** A numeric string. */
		public ?string $t1HOURTO3HOURS = null,
		/** A numeric string. */
		public ?string $t20MINSTO40MINS = null,
		/** A numeric string. */
		public ?string $t40MINSTO1HOUR = null,
	) {
	}
}
