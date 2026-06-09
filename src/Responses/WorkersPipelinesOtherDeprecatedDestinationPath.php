<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkersPipelinesOtherDeprecatedDestinationPath
{
	public function __construct(
		/** Specifies the R2 Bucket to store files. */
		public string $bucket,
		/** Specifies the name pattern to for individual data files. */
		public mixed $filename = null,
		/** Specifies the name pattern for directory. */
		public ?string $filepath = null,
		/** Specifies the base directory within the bucket. */
		public ?string $prefix = null,
	) {
	}
}
