<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerScriptEnvironmentPatchSettingsObservability
{
	public function __construct(
		/** Whether observability is enabled for the Worker. */
		public ?bool $enabled = null,
		/** The sampling rate for incoming requests. From 0 to 1 (1 = 100%, 0.1 = 10%). Default is 1. */
		public ?float $headSamplingRate = null,
		/** Log settings for the Worker. */
		public ?WorkerScriptEnvironmentPatchSettingsObservabilityLogs $logs = null,
		/** Trace settings for the Worker. */
		public ?WorkerScriptEnvironmentPatchSettingsObservabilityTraces $traces = null,
	) {
	}
}
