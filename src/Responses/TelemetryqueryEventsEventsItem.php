<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A single telemetry event representing a log line, span, or metric data point emitted by a Worker.
 */
readonly class TelemetryqueryEventsEventsItem
{
	public function __construct(
		/** Structured metadata extracted from the event. These fields are indexed and available for filtering and aggregation. */
		public ?TelemetryqueryEventsEventsItemmetadata $metadata = null,
		/** The dataset this event belongs to (e.g. cloudflare-workers). */
		public ?string $dataset = null,
		/** Raw log payload. May be a string or a structured object depending on how the log was emitted. */
		public mixed $source = null,
		/** Event timestamp as a Unix epoch in milliseconds. */
		public ?int $timestamp = null,
		/** Cloudflare Containers event information that enriches your logs for identifying and debugging issues. */
		public ?array $containers = null,
		/** Cloudflare Workers event information that enriches your logs for identifying and debugging issues. */
		public mixed $workers = null,
	) {
	}
}
