<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Trace result with an origin status code
 */
readonly class AccountRequestTracerRequestTrace
{
	public function __construct(
		/** HTTP Status code of zone response */
		public ?int $statusCode = null,
		public ?array $trace = null,
	) {
	}
}
