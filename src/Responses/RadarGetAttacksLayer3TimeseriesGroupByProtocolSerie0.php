<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetAttacksLayer3TimeseriesGroupByProtocolSerie0
{
	public function __construct(
		public ?array $gRE = null,
		public ?array $iCMP = null,
		public ?array $tCP = null,
		public ?array $uDP = null,
		public ?array $timestamps = null,
	) {
	}
}
