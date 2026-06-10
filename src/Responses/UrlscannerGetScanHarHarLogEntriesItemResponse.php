<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UrlscannerGetScanHarHarLogEntriesItemResponse
{
	public function __construct(
		public ?float $transferSize = null,
		public ?float $bodySize = null,
		public ?UrlscannerGetScanHarHarLogEntriesItemResponseContent $content = null,
		public ?array $headers = null,
		public ?float $headersSize = null,
		public ?string $httpVersion = null,
		public ?string $redirectURL = null,
		public ?float $status = null,
		public ?string $statusText = null,
	) {
	}
}
