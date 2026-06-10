<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A single step in a test.
 */
readonly class GetScanReportReportTestsItemStepsItem
{
	public function __construct(
		/** Assertions that were made against the received response. */
		public ?array $assertions = null,
		/** HTTP request that was made, if any. */
		public ?GetScanReportReportTestsItemStepsItemRequest $request = null,
		/** HTTP response that was received, if any. */
		public ?GetScanReportReportTestsItemStepsItemResponse $response = null,
	) {
	}
}
