<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UrlscannerGetScanHarHarLogEntriesItemRequest
{
	public function __construct(
		public ?float $bodySize = null,
		public ?array $headers = null,
		public ?float $headersSize = null,
		public ?string $httpVersion = null,
		public ?string $method = null,
		public ?string $url = null,
	) {
	}
}
