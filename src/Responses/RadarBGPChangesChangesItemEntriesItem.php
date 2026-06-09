<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarBGPChangesChangesItemEntriesItem
{
	public function __construct(
		/** The customer ASN affected. */
		public int $customerAsn,
		public array $providers,
		public \FoundryCo\Cloudflare\Enums\RadarBGPChangesChangesItemEntriesItemType $type,
	) {
	}
}
