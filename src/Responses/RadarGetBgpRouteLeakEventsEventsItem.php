<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetBgpRouteLeakEventsEventsItem
{
	public function __construct(
		public ?array $countries = null,
		public ?string $detectedTs = null,
		public ?bool $finished = null,
		public ?int $id = null,
		public ?int $leakAsn = null,
		public ?int $leakCount = null,
		public ?array $leakSeg = null,
		public ?int $leakType = null,
		public ?string $maxTs = null,
		public ?string $minTs = null,
		public ?int $originCount = null,
		public ?int $peerCount = null,
		public ?int $prefixCount = null,
	) {
	}
}
