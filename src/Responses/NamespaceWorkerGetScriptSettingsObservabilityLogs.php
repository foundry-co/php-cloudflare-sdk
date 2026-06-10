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
readonly class NamespaceWorkerGetScriptSettingsObservabilityLogs
{
	public function __construct(
		/** Whether logs are enabled for the Worker. */
		public ?bool $enabled = null,
		/** Whether [invocation logs](https://developers.cloudflare.com/workers/observability/logs/workers-logs/#invocation-logs) are enabled for the Worker. */
		public ?bool $invocationLogs = null,
		/** A list of destinations where logs will be exported to. */
		public ?array $destinations = null,
		/** The sampling rate for logs. From 0 to 1 (1 = 100%, 0.1 = 10%). Default is 1. */
		public ?float $headSamplingRate = null,
		/** Whether log persistence is enabled for the Worker. */
		public ?bool $persist = null,
	) {
	}
}
