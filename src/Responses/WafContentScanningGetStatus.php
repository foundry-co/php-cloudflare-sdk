<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Defines the status for Content Scanning.
 */
readonly class WafContentScanningGetStatus
{
	public function __construct(
		/** Defines the last modification date (ISO 8601) of the Content Scanning status. */
		public ?string $modified = null,
		/** Defines the status of Content Scanning. */
		public ?string $value = null,
	) {
	}
}
