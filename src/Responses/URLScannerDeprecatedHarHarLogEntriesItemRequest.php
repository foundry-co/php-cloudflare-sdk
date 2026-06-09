<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class URLScannerDeprecatedHarHarLogEntriesItemRequest
{
	public function __construct(
		public float $bodySize,
		public array $headers,
		public float $headersSize,
		public string $httpVersion,
		public string $method,
		public string $url,
	) {
	}
}
