<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TokenValidationRulesPreviewOperationsItem
{
	public function __construct(
		/** The endpoint which can contain path parameter templates in curly braces, each will be replaced from left to right with {varN}, starting with {var1}, during insertion. This will further be Cloudflare-normalized upon insertion. See: https://developers.cloudflare.com/rules/normalization/how-it-works/. */
		public ?string $endpoint = null,
		/** RFC3986-compliant host. */
		public ?string $host = null,
		public mixed $lastUpdated = null,
		/** The HTTP method used to access the endpoint. */
		public ?\FoundryCo\Cloudflare\Enums\TokenValidationRulesPreviewOperationsItemMethod $method = null,
		public mixed $operationId = null,
		/**
		 * Details how `selector` interacted with an operation:
		 *   - `included` operations are included by `selector` and will be covered by the Token Validation Rule
		 *   - `excluded` operations are excluded by `selector` and will not be covered by the Token Validation Rule
		 *   - `ignored` operations are not included by `selector` and will not be covered by the Token Validation Rule
		 */
		public ?\FoundryCo\Cloudflare\Enums\TokenValidationRulesPreviewOperationsItemState $state = null,
	) {
	}
}
