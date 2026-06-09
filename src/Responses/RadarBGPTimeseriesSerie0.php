<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarBGPTimeseriesSerie0
{
	public function __construct(
		public array $ipv4,
		public array $ipv6,
		public array $timestamps,
	) {
	}
}
