<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CreateScanReportReportTestsItemStepsItemResponse
{
	public function __construct(
		/** HTTP response body. */
		public ?CreateScanReportReportTestsItemStepsItemResponseBody $body = null,
		/** Names of headers that were received. */
		public ?array $headerNames = null,
		/** HTTP status code. */
		public ?int $status = null,
		/** HTTP status text, if available for the status code. */
		public ?string $statusText = null,
	) {
	}
}
