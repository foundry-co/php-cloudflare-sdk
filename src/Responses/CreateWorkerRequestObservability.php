<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Observability settings for the Worker.
 */
readonly class CreateWorkerRequestObservability
{
	public function __construct(
		/** Whether observability is enabled for the Worker. */
		public ?bool $enabled = null,
		/** The sampling rate for observability. From 0 to 1 (1 = 100%, 0.1 = 10%). */
		public ?float $headSamplingRate = null,
		/** Log settings for the Worker. */
		public ?CreateWorkerRequestObservabilityLogs $logs = null,
		/** Trace settings for the Worker. */
		public ?CreateWorkerRequestObservabilityTraces $traces = null,
	) {
	}
}
