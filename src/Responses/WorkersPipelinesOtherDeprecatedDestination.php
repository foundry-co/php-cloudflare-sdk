<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkersPipelinesOtherDeprecatedDestination
{
	public function __construct(
		public WorkersPipelinesOtherDeprecatedDestinationBatch $batch,
		public WorkersPipelinesOtherDeprecatedDestinationCompression $compression,
		/** Specifies the format of data to deliver. */
		public \FoundryCo\Cloudflare\Enums\WorkersPipelinesOtherDeprecatedDestinationFormat $format,
		public WorkersPipelinesOtherDeprecatedDestinationPath $path,
		/** Specifies the type of destination. */
		public \FoundryCo\Cloudflare\Enums\WorkersPipelinesOtherDeprecatedDestinationType $type,
	) {
	}
}
