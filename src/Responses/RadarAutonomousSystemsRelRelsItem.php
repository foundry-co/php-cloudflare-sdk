<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarAutonomousSystemsRelRelsItem
{
	public function __construct(
		public int $asn1,
		public string $asn1Country,
		public string $asn1Name,
		public int $asn2,
		public string $asn2Country,
		public string $asn2Name,
		public string $rel,
	) {
	}
}
