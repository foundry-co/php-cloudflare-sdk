<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UrlscannerGetScanScanDomainsExamplecom
{
	public function __construct(
		public ?UrlscannerGetScanScanDomainsExamplecomCategories $categories = null,
		public ?array $dns = null,
		public ?string $name = null,
		public ?UrlscannerGetScanScanDomainsExamplecomRank $rank = null,
		public ?string $type = null,
	) {
	}
}
