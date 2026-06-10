<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SpeedListTestHistoryMobileReportError
{
	public function __construct(
		/** The error code of the Lighthouse result. */
		public ?\FoundryCo\Cloudflare\Enums\SpeedListTestHistoryMobileReportErrorCode $code = null,
		/** Detailed error message. */
		public ?string $detail = null,
		/** The final URL displayed to the user. */
		public ?string $finalDisplayedUrl = null,
	) {
	}
}
