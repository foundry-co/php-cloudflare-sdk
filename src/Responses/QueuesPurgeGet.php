<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class QueuesPurgeGet
{
	public function __construct(
		/** Indicates if the last purge operation completed successfully. */
		public ?string $completed = null,
		/** Timestamp when the last purge operation started. */
		public ?string $startedAt = null,
	) {
	}
}
