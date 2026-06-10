<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetAttacksLayer3TimeseriesGroupByDurationSerie0
{
	public function __construct(
		public ?array $oVER3HOURS = null,
		public ?array $uNDER10MINS = null,
		public ?array $t10MINSTO20MINS = null,
		public ?array $t1HOURTO3HOURS = null,
		public ?array $t20MINSTO40MINS = null,
		public ?array $t40MINSTO1HOUR = null,
		public ?array $timestamps = null,
	) {
	}
}
