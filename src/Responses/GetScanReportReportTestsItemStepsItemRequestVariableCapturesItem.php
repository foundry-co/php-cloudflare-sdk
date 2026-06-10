<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A variable to capture from the response body.
 */
readonly class GetScanReportReportTestsItemStepsItemRequestVariableCapturesItem
{
	public function __construct(
		/** JSONPath expression used for capture, e.g. `"$.id"`. */
		public ?string $jsonPath = null,
		/** Variable name, e.g. `"resource_id"`. */
		public ?string $name = null,
	) {
	}
}
