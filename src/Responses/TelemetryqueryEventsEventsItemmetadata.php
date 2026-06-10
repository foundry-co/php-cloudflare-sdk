<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Structured metadata extracted from the event. These fields are indexed and available for filtering and aggregation.
 */
readonly class TelemetryqueryEventsEventsItemmetadata
{
	public function __construct(
		/** Unique event ID. Use as the cursor value for offset-based pagination. */
		public ?string $id = null,
		/** Cloudflare account identifier. */
		public ?string $account = null,
		/** Cloudflare product that generated this event (e.g. workers, pages). */
		public ?string $cloudService = null,
		public ?int $coldStart = null,
		/** Estimated cost units for this invocation. */
		public ?int $cost = null,
		/** Span duration in milliseconds. */
		public ?int $duration = null,
		/** Span end time as a Unix epoch in milliseconds. */
		public ?int $endTime = null,
		/** Error message, present when the log represents an error. */
		public ?string $error = null,
		/** Templatized version of the error message used for grouping similar errors. */
		public ?string $errorTemplate = null,
		/** Content-based fingerprint used to group similar events. */
		public ?string $fingerprint = null,
		/** Log level (e.g. log, debug, info, warn, error). */
		public ?string $level = null,
		/** Log message text. */
		public ?string $message = null,
		/** Templatized version of the log message used for grouping similar messages. */
		public ?string $messageTemplate = null,
		/** Metric name when the event represents a metric data point. */
		public ?string $metricName = null,
		/** Origin of the event (e.g. fetch, scheduled, queue). */
		public ?string $origin = null,
		/** Span ID of the parent span in the trace hierarchy. */
		public ?string $parentSpanId = null,
		/** Infrastructure provider identifier. */
		public ?string $provider = null,
		/** Cloudflare data center / region that handled the request. */
		public ?string $region = null,
		/** Cloudflare request ID that ties all logs from a single invocation together. */
		public ?string $requestId = null,
		/** Worker script name that produced this event. */
		public ?string $service = null,
		/** Span ID for this individual unit of work within a trace. */
		public ?string $spanId = null,
		/** Human-readable name for this span. */
		public ?string $spanName = null,
		/** Stack / deployment identifier. */
		public ?string $stackId = null,
		/** Span start time as a Unix epoch in milliseconds. */
		public ?int $startTime = null,
		/** HTTP response status code returned by the Worker. */
		public ?int $statusCode = null,
		/** Total duration of the entire trace in milliseconds. */
		public ?int $traceDuration = null,
		/** Distributed trace ID linking spans across services. */
		public ?string $traceId = null,
		/** Logical transaction name for this request. */
		public ?string $transactionName = null,
		/** What triggered the invocation (e.g. GET /users, POST /orders, queue message). */
		public ?string $trigger = null,
		/** Event type classifier (e.g. cf-worker-event, cf-worker-log). */
		public ?string $type = null,
		/** Request URL that triggered the Worker invocation. */
		public ?string $url = null,
	) {
	}
}
