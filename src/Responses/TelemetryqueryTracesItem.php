<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TelemetryqueryTracesItem
{
	public function __construct(
		/** Name of the root span that initiated the trace. */
		public ?string $rootSpanName = null,
		/** Logical transaction name for the root span. */
		public ?string $rootTransactionName = null,
		/** List of Worker services involved in the trace. */
		public ?array $service = null,
		/** Total number of spans in the trace. */
		public ?float $spans = null,
		/** Total duration of the trace in milliseconds. */
		public ?float $traceDurationMs = null,
		/** Trace end time as a Unix epoch in milliseconds. */
		public ?float $traceEndMs = null,
		/** Unique identifier for the distributed trace. */
		public ?string $traceId = null,
		/** Trace start time as a Unix epoch in milliseconds. */
		public ?float $traceStartMs = null,
	) {
	}
}
