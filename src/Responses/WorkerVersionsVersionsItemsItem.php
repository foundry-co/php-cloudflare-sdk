<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerVersionsVersionsItemsItem
{
	public function __construct(
		/** Unique identifier for the version. */
		public ?string $id = null,
		public ?WorkerVersionsVersionsItemsItemMetadata $metadata = null,
		/** Sequential version number. */
		public ?float $number = null,
	) {
	}
}
