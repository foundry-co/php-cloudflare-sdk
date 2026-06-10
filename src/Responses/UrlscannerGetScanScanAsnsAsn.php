<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * ASN's contacted
 */
readonly class UrlscannerGetScanScanAsnsAsn
{
	public function __construct(
		public ?string $asn = null,
		public ?string $description = null,
		public ?string $locationAlpha2 = null,
		public ?string $name = null,
		public ?string $orgName = null,
	) {
	}
}
