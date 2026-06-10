<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Resource limits enforced at runtime.
 */
readonly class ListWorkerVersionsLimits
{
	public function __construct(
		/** CPU time limit in milliseconds. */
		public ?int $cpuMs = null,
		/** Subrequest limit per request. */
		public ?int $subrequests = null,
	) {
	}
}
