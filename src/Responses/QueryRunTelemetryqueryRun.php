<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Represents a single execution of a query against Workers Observability data, including the query definition, execution status, and performance statistics.
 */
readonly class QueryRunTelemetryqueryRun
{
	public function __construct(
		/** Cloudflare account ID that owns this query run. */
		public string $accountId,
		/** Whether this was a dry run (results not persisted). */
		public bool $dry,
		/** Number of time-series buckets used for the query. Higher values produce more detailed series data. */
		public float $granularity,
		/** Unique identifier for this query run. */
		public string $id,
		/** A saved query definition with its parameters, metadata, and ownership information. */
		public QueryRunTelemetryqueryRunQuery $query,
		/** Current execution status of the query run. */
		public \FoundryCo\Cloudflare\Enums\QueryRunTelemetryqueryRunStatus $status,
		/** Time range for the query execution */
		public QueryRunTelemetryqueryRunTimeframe $timeframe,
		/** ID of the user who initiated the query run. */
		public string $userId,
		/** ISO-8601 timestamp when the query run was created. */
		public ?string $created = null,
		/** Query performance statistics from the database (does not include network latency). */
		public ?QueryRunTelemetryqueryRunStatistics $statistics = null,
		/** ISO-8601 timestamp when the query run was last updated. */
		public ?string $updated = null,
	) {
	}
}
