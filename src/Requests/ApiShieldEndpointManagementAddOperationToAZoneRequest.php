<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Add one operation to a zone
 */
readonly class ApiShieldEndpointManagementAddOperationToAZoneRequest
{
	public function __construct(
		/** The endpoint which can contain path parameter templates in curly braces, each will be replaced from left to right with {varN}, starting with {var1}, during insertion. This will further be Cloudflare-normalized upon insertion. See: https://developers.cloudflare.com/rules/normalization/how-it-works/. */
		public string $endpoint,
		/** RFC3986-compliant host. */
		public string $host,
		/** The HTTP method used to access the endpoint. */
		public \FoundryCo\Cloudflare\Enums\ApiShieldEndpointManagementAddOperationToAZoneRequestMethod $method,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'endpoint' => $this->endpoint,
		    'host' => $this->host,
		    'method' => $this->method->value,
		], fn ($v) => $v !== null);
	}
}
