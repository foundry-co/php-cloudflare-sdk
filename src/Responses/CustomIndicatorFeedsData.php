<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CustomIndicatorFeedsData
{
	public function __construct(
		/** Feed id */
		public ?int $fileId = null,
		/** Name of the file unified in our system */
		public ?string $filename = null,
		/** Current status of upload, should be unified */
		public ?string $status = null,
	) {
	}
}
