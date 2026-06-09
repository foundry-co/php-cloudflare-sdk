<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class InstantLogsJobsForAZoneJobs
{
	public function __construct(
		/** Unique WebSocket address that will receive messages from Cloudflare’s edge. */
		public ?string $destinationConf = null,
		/** Comma-separated list of fields. */
		public ?string $fields = null,
		/** Filters to drill down into specific events. */
		public ?string $filter = null,
		/** The sample parameter is the sample rate of the records set by the client: "sample": 1 is 100% of records "sample": 10 is 10% and so on. */
		public ?int $sample = null,
		/** Unique session id of the job. */
		public ?string $sessionId = null,
	) {
	}
}
