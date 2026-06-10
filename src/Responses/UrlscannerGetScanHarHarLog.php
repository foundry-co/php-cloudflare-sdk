<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UrlscannerGetScanHarHarLog
{
	public function __construct(
		public ?UrlscannerGetScanHarHarLogCreator $creator = null,
		public ?array $entries = null,
		public ?array $pages = null,
		public ?string $version = null,
	) {
	}
}
