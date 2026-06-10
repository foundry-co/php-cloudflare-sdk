<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UrlscannerGetScanScanPage
{
	public function __construct(
		public ?string $asn = null,
		public ?string $asnLocationAlpha2 = null,
		public ?string $asnname = null,
		public ?array $console = null,
		public ?array $cookies = null,
		public ?string $country = null,
		public ?string $countryLocationAlpha2 = null,
		public ?string $domain = null,
		public ?array $headers = null,
		public ?string $ip = null,
		public ?UrlscannerGetScanScanPageJs $js = null,
		public ?array $securityViolations = null,
		public ?float $status = null,
		public ?string $subdivision1Name = null,
		public ?string $subdivision2name = null,
		public ?string $url = null,
	) {
	}
}
