<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CreateScanReportReportTestsItemStepsItemRequest
{
	public function __construct(
		/** Credential set that was used. */
		public ?CreateScanReportReportTestsItemStepsItemRequestCredentialSet $credentialSet = null,
		/** Names of headers that were sent. */
		public ?array $headerNames = null,
		/** HTTP method. */
		public mixed $method = null,
		/** Exact and full URL (including host, query parameters) that was requested. */
		public ?string $url = null,
		/** Variable captures requested for this step. */
		public ?array $variableCaptures = null,
		/** Request body, if any. */
		public ?array $body = null,
	) {
	}
}
