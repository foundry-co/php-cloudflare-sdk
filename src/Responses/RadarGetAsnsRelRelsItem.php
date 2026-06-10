<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetAsnsRelRelsItem
{
	public function __construct(
		public ?int $asn1 = null,
		public ?string $asn1Country = null,
		public ?string $asn1Name = null,
		public ?int $asn2 = null,
		public ?string $asn2Country = null,
		public ?string $asn2Name = null,
		public ?string $rel = null,
	) {
	}
}
