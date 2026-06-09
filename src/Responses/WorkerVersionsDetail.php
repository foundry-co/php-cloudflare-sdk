<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerVersionsDetail
{
	public function __construct(
		public WorkerVersionsDetailResources $resources,
		/** Unique identifier for the version. */
		public ?string $id = null,
		public ?WorkerVersionsDetailMetadata $metadata = null,
		/** Sequential version number. */
		public ?float $number = null,
	) {
	}
}
