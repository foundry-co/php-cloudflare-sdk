<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Error that occurred during a test.
 */
readonly class ListScansReportReportTestsItemPreflightErrorsItem
{
	public function __construct(
		/** Human-readable error description. */
		public ?string $description = null,
		/** Numeric error code identifying the class of error, if available. */
		public ?int $errorCode = null,
	) {
	}
}
