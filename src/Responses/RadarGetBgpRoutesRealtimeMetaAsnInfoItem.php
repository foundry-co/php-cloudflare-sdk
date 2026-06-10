<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetBgpRoutesRealtimeMetaAsnInfoItem
{
	public function __construct(
		/** Name of the autonomous system. */
		public ?string $asName = null,
		/** AS number. */
		public ?int $asn = null,
		/** Alpha-2 code for the AS's registration country. */
		public ?string $countryCode = null,
		/** Organization ID. */
		public ?string $orgId = null,
		/** Organization name. */
		public ?string $orgName = null,
	) {
	}
}
