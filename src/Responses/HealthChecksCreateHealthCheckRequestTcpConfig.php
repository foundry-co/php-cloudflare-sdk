<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Parameters specific to TCP health check.
 */
readonly class HealthChecksCreateHealthCheckRequestTcpConfig
{
	public function __construct(
		/** The TCP connection method to use for the health check. */
		public ?\FoundryCo\Cloudflare\Enums\HealthChecksCreateHealthCheckRequestTcpConfigMethod $method = null,
		/** Port number to connect to for the health check. Defaults to 80. */
		public ?int $port = null,
	) {
	}
}
