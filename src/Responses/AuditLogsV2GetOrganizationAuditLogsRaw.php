<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Provides raw information about the request and response.
 */
readonly class AuditLogsV2GetOrganizationAuditLogsRaw
{
	public function __construct(
		/** The Cloudflare Ray ID for the request. */
		public ?string $cfRayId = null,
		/** The HTTP method of the request. */
		public ?string $method = null,
		/** The HTTP response status code returned by the API. */
		public ?int $statusCode = null,
		/** The URI of the request. */
		public ?string $uri = null,
		/** The client's user agent string sent with the request. */
		public ?string $userAgent = null,
	) {
	}
}
