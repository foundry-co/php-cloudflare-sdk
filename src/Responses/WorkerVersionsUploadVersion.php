<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerVersionsUploadVersion
{
	public function __construct(
		public ?WorkerVersionsUploadVersionResources $resources = null,
		/** Unique identifier for the version. */
		public ?string $id = null,
		public ?WorkerVersionsUploadVersionMetadata $metadata = null,
		/** Sequential version number. */
		public ?float $number = null,
		/** Time in milliseconds spent on [Worker startup](https://developers.cloudflare.com/workers/platform/limits/#worker-startup-time). */
		public ?int $startupTimeMs = null,
	) {
	}
}
