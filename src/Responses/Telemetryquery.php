<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Complete results of a query run. The populated fields depend on the requested view type (events, calculations, invocations, traces, or agents).
 */
readonly class Telemetryquery
{
	public function __construct(
		/** Represents a single execution of a query against Workers Observability data, including the query definition, execution status, and performance statistics. */
		public ?TelemetryqueryRun $run = null,
		/** Query performance statistics from the database. Includes execution time, rows scanned, and bytes read. Does not include network latency. */
		public ?TelemetryqueryStatistics $statistics = null,
		/** Durable Object agent summaries. Present when the query view is 'agents'. Each entry represents an agent with its event counts and status. */
		public ?array $agents = null,
		/** Aggregated calculation results. Present when the query view is 'calculations'. Contains computed metrics (count, avg, p99, etc.) with optional group-by breakdowns and time-series data. */
		public ?array $calculations = null,
		/** Comparison calculation results from the previous time period. Present when the compare option is enabled. Same structure as calculations. */
		public ?array $compare = null,
		/** Individual event results. Present when the query view is 'events'. Contains the matching log lines and their metadata. */
		public ?TelemetryqueryEvents $events = null,
		/** Events grouped by invocation (request ID). Present when the query view is 'invocations'. Each key is a request ID mapping to all events from that invocation. */
		public ?array $invocations = null,
		/** Trace summaries matching the query. Present when the query view is 'traces'. Each entry represents a distributed trace with its spans, duration, and services involved. */
		public ?array $traces = null,
	) {
	}
}
