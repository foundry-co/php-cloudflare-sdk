<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Assertion that was made against the received response.
 */
readonly class CreateScanReportReportTestsItemStepsItemAssertionsItem
{
	public function __construct(
		/** Human-readable description of the assertion, explaining what was checked. */
		public ?string $description = null,
		/** Kind of assertion. */
		public ?CreateScanReportReportTestsItemStepsItemAssertionsItemKind $kind = null,
		/** Observed value on which the assertion was made. */
		public ?int $observed = null,
		/** Outcome of the assertion. */
		public mixed $outcome = null,
	) {
	}
}
