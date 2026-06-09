<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarBGPChangesAsnInfoT13335
{
	public function __construct(
		/** ASN number. */
		public int $asn,
		/** Alpha-2 country code. */
		public string $country,
		/** AS name. */
		public string $name,
	) {
	}
}
