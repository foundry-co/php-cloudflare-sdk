<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkersPipelinesOtherDeprecatedDestinationBatch
{
	public function __construct(
		/** Specifies rough maximum size of files. */
		public int $maxBytes,
		/** Specifies duration to wait to aggregate batches files. */
		public float $maxDurationS,
		/** Specifies rough maximum number of rows per file. */
		public int $maxRows,
	) {
	}
}
