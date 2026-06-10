<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UrlscannerCreateScan
{
	public function __construct(
		/** Time when url was submitted for scanning. */
		public ?\DateTimeImmutable $time = null,
		/** Canonical form of submitted URL. Use this if you want to later search by URL. */
		public ?string $url = null,
		/** Scan ID. */
		public ?string $uuid = null,
		/** Submitted visibility status. */
		public ?\FoundryCo\Cloudflare\Enums\UrlscannerCreateScanVisibility $visibility = null,
	) {
	}
}
