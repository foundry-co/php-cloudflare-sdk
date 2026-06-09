<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Trace settings for the Worker.
 */
readonly class WorkerScriptEnvironmentPatchSettingsRequestResultObservabilityTraces
{
	public function __construct(
		/** A list of destinations where traces will be exported to. */
		public ?array $destinations = null,
		/** Whether traces are enabled for the Worker. */
		public ?bool $enabled = null,
		/** The sampling rate for traces. From 0 to 1 (1 = 100%, 0.1 = 10%). Default is 1. */
		public ?float $headSamplingRate = null,
		/** Whether trace persistence is enabled for the Worker. */
		public ?bool $persist = null,
		/** Controls how inbound trace context (traceparent/tracestate) headers on incoming requests are handled. "authenticated" (default) honors inbound trace context only when accompanied by a valid trace auth token. "accept" unconditionally accepts inbound trace context. Requires the trace propagation feature to be enabled. */
		public ?\FoundryCo\Cloudflare\Enums\WorkerScriptEnvironmentPatchSettingsRequestResultObservabilityTracesPropagationPolicy $propagationPolicy = null,
	) {
	}
}
