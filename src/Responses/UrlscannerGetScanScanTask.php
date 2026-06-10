<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UrlscannerGetScanScanTask
{
	public function __construct(
		/** Submitter location */
		public ?string $clientLocation = null,
		public ?\FoundryCo\Cloudflare\Enums\UrlscannerGetScanScanTaskClientType $clientType = null,
		/** URL of the primary request, after all HTTP redirects */
		public ?string $effectiveUrl = null,
		public ?UrlscannerGetScanScanTaskScannedFrom $scannedFrom = null,
		public ?\FoundryCo\Cloudflare\Enums\UrlscannerGetScanScanTaskStatus $status = null,
		public ?string $time = null,
		public ?string $timeEnd = null,
		/** Submitted URL */
		public ?string $url = null,
		/** Scan ID */
		public ?string $uuid = null,
		public ?\FoundryCo\Cloudflare\Enums\UrlscannerGetScanScanTaskVisibility $visibility = null,
	) {
	}
}
