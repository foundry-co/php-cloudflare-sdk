<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create URL Scan
 */
readonly class UrlscannerCreateScanRequest
{
	public function __construct(
		public string $url,
		/** Country to geo egress from */
		public ?\FoundryCo\Cloudflare\Enums\UrlscannerCreateScanRequestCountry $country = null,
		/** Set custom headers. */
		public ?array $customHeaders = null,
		/** Take multiple screenshots targeting different device types. */
		public ?array $screenshotsResolutions = null,
		/** The option `Public` means it will be included in listings like recent scans and search results. `Unlisted` means it will not be included in the aforementioned listings, users will need to have the scan's ID to access it. A a scan will be automatically marked as unlisted if it fails, if it contains potential PII or other sensitive material. */
		public ?\FoundryCo\Cloudflare\Enums\UrlscannerCreateScanRequestVisibility $visibility = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'url' => $this->url,
		    'country' => $this->country?->value,
		    'customHeaders' => $this->customHeaders,
		    'screenshotsResolutions' => $this->screenshotsResolutions?->value,
		    'visibility' => $this->visibility?->value,
		], fn ($v) => $v !== null);
	}
}
