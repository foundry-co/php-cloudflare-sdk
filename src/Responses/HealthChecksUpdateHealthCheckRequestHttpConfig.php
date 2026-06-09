<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Parameters specific to an HTTP or HTTPS health check.
 */
readonly class HealthChecksUpdateHealthCheckRequestHttpConfig
{
	public function __construct(
		/** Do not validate the certificate when the health check uses HTTPS. */
		public ?bool $allowInsecure = null,
		/** A case-insensitive sub-string to look for in the response body. If this string is not found, the origin will be marked as unhealthy. */
		public ?string $expectedBody = null,
		/** The expected HTTP response codes (e.g. "200") or code ranges (e.g. "2xx" for all codes starting with 2) of the health check. */
		public ?array $expectedCodes = null,
		/** Follow redirects if the origin returns a 3xx status code. */
		public ?bool $followRedirects = null,
		/** The HTTP request headers to send in the health check. It is recommended you set a Host header by default. The User-Agent header cannot be overridden. */
		public ?array $header = null,
		/** The HTTP method to use for the health check. */
		public ?\FoundryCo\Cloudflare\Enums\HealthChecksUpdateHealthCheckRequestHttpConfigMethod $method = null,
		/** The endpoint path to health check against. */
		public ?string $path = null,
		/** Port number to connect to for the health check. Defaults to 80 if type is HTTP or 443 if type is HTTPS. */
		public ?int $port = null,
	) {
	}
}
