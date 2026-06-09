<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Parameters specific to TCP health check.
 */
readonly class HealthChecksCheckTcpConfig
{
	public function __construct(
		/** The TCP connection method to use for the health check. */
		public ?\FoundryCo\Cloudflare\Enums\HealthChecksCheckTcpConfigMethod $method = null,
		/** Port number to connect to for the health check. Defaults to 80. */
		public ?int $port = null,
	) {
	}
}
