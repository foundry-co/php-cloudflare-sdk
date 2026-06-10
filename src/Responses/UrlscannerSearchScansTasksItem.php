<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UrlscannerSearchScansTasksItem
{
	public function __construct(
		/** Alpha-2 country code */
		public ?string $country = null,
		/** When scan was submitted (UTC) */
		public ?\DateTimeImmutable $time = null,
		/** Scan url (after redirects) */
		public ?string $url = null,
		/** Scan id */
		public ?string $uuid = null,
		/** Submitted visibility status. */
		public ?\FoundryCo\Cloudflare\Enums\UrlscannerSearchScansTasksItemVisibility $visibility = null,
	) {
	}
}
