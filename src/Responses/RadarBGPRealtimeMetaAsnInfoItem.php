<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarBGPRealtimeMetaAsnInfoItem
{
	public function __construct(
		/** Name of the autonomous system. */
		public string $asName,
		/** AS number. */
		public int $asn,
		/** Alpha-2 code for the AS's registration country. */
		public string $countryCode,
		/** Organization ID. */
		public string $orgId,
		/** Organization name. */
		public string $orgName,
	) {
	}
}
