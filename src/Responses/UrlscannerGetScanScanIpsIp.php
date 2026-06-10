<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UrlscannerGetScanScanIpsIp
{
	public function __construct(
		public ?string $asn = null,
		public ?string $asnDescription = null,
		public ?string $asnLocationAlpha2 = null,
		public ?string $asnName = null,
		public ?string $asnOrgName = null,
		public ?string $continent = null,
		public ?string $geonameId = null,
		public ?string $ip = null,
		public ?string $ipVersion = null,
		public ?string $latitude = null,
		public ?string $locationAlpha2 = null,
		public ?string $locationName = null,
		public ?string $longitude = null,
		public ?string $subdivision1Name = null,
		public ?string $subdivision2Name = null,
	) {
	}
}
