<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkersKvNamespaceWriteMultipleKeyValuePairs
{
	public function __construct(
		/** Number of keys successfully updated. */
		public ?float $successfulKeyCount = null,
		/** Name of the keys that failed to be fully updated. They should be retried. */
		public ?array $unsuccessfulKeys = null,
	) {
	}
}
