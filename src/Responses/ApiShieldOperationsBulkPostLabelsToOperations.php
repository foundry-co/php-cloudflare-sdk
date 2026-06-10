<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ApiShieldOperationsBulkPostLabelsToOperations
{
	public function __construct(
		/** The endpoint which can contain path parameter templates in curly braces, each will be replaced from left to right with {varN}, starting with {var1}, during insertion. This will further be Cloudflare-normalized upon insertion. See: https://developers.cloudflare.com/rules/normalization/how-it-works/. */
		public ?string $endpoint = null,
		/** RFC3986-compliant host. */
		public ?string $host = null,
		/** The HTTP method used to access the endpoint. */
		public ?\FoundryCo\Cloudflare\Enums\ApiShieldOperationsBulkPostLabelsToOperationsMethod $method = null,
		public mixed $lastUpdated = null,
		public mixed $operationId = null,
		public ?array $labels = null,
	) {
	}
}
