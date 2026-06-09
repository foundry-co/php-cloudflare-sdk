<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class URLScannerDeprecatedScansTasksItem
{
	public function __construct(
		/** Alpha-2 country code */
		public string $country,
		/** When scan was submitted (UTC) */
		public \DateTimeImmutable $time,
		/** Scan url (after redirects) */
		public string $url,
		/** Scan id */
		public string $uuid,
		/** Submitted visibility status. */
		public \FoundryCo\Cloudflare\Enums\URLScannerDeprecatedScansTasksItemVisibility $visibility,
	) {
	}
}
