<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Result of a single test.
 */
readonly class CreateScanReportReportTestsItem
{
	public function __construct(
		/** Steps that were executed. */
		public ?array $steps = null,
		/** Verdict of this single test. */
		public mixed $verdict = null,
		/** Errors that prevented step execution. */
		public ?array $preflightErrors = null,
	) {
	}
}
