<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class URLScannerDeprecatedScan
{
	public function __construct(
		/** Time when url was submitted for scanning. */
		public \DateTimeImmutable $time,
		/** Canonical form of submitted URL. Use this if you want to later search by URL. */
		public string $url,
		/** Scan ID. */
		public string $uuid,
		/** Submitted visibility status. */
		public \FoundryCo\Cloudflare\Enums\URLScannerDeprecatedScanVisibility $visibility,
	) {
	}
}
