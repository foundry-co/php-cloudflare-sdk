<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SharedSharedquerygetTracesItem
{
	public function __construct(
		/** Name of the root span that initiated the trace. */
		public string $rootSpanName,
		/** Logical transaction name for the root span. */
		public string $rootTransactionName,
		/** List of Worker services involved in the trace. */
		public array $service,
		/** Total number of spans in the trace. */
		public float $spans,
		/** Total duration of the trace in milliseconds. */
		public float $traceDurationMs,
		/** Trace end time as a Unix epoch in milliseconds. */
		public float $traceEndMs,
		/** Unique identifier for the distributed trace. */
		public string $traceId,
		/** Trace start time as a Unix epoch in milliseconds. */
		public float $traceStartMs,
	) {
	}
}
