<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class QueuesPushMessageMetadata
{
	public function __construct(
		/** Best-effort metrics for the queue. Values may be approximate due to the distributed nature of queues. */
		public ?QueuesPushMessageMetadataMetrics $metrics = null,
	) {
	}
}
