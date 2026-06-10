<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Log settings for the Worker.
 */
readonly class EditWorkerObservabilityLogs
{
	public function __construct(
		/** A list of destinations where logs will be exported to. */
		public ?array $destinations = null,
		/** Whether logs are enabled for the Worker. */
		public ?bool $enabled = null,
		/** The sampling rate for logs. From 0 to 1 (1 = 100%, 0.1 = 10%). */
		public ?float $headSamplingRate = null,
		/** Whether [invocation logs](https://developers.cloudflare.com/workers/observability/logs/workers-logs/#invocation-logs) are enabled for the Worker. */
		public ?bool $invocationLogs = null,
		/** Whether log persistence is enabled for the Worker. */
		public ?bool $persist = null,
	) {
	}
}
