<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Metadata about the version.
 */
readonly class GetWorkerVersionAnnotations
{
	public function __construct(
		/** Human-readable message about the version. Truncated to 1000 bytes if longer. */
		public ?string $workersmessage = null,
		/** User-provided identifier for the version. Maximum 100 bytes. */
		public ?string $workerstag = null,
		/** Operation that triggered the creation of the version. */
		public ?string $workerstriggeredBy = null,
	) {
	}
}
