<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Best-effort metrics for the queue. Values may be approximate due to the distributed nature of queues.
 */
readonly class QueueMetrics
{
	public function __construct(
		/** The size in bytes of unacknowledged messages in the queue. */
		public float $backlogBytes,
		/** The number of unacknowledged messages in the queue. */
		public float $backlogCount,
		/** Unix timestamp in milliseconds of the oldest unacknowledged message in the queue. Returns 0 if unknown. */
		public float $oldestMessageTimestampMs,
	) {
	}
}
