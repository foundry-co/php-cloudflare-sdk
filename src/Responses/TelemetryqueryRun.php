<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Represents a single execution of a query against Workers Observability data, including the query definition, execution status, and performance statistics.
 */
readonly class TelemetryqueryRun
{
	public function __construct(
		/** Cloudflare account ID that owns this query run. */
		public ?string $accountId = null,
		/** Whether this was a dry run (results not persisted). */
		public ?bool $dry = null,
		/** Number of time-series buckets used for the query. Higher values produce more detailed series data. */
		public ?float $granularity = null,
		/** Unique identifier for this query run. */
		public ?string $id = null,
		/** A saved query definition with its parameters, metadata, and ownership information. */
		public ?TelemetryqueryRunQuery $query = null,
		/** Current execution status of the query run. */
		public ?\FoundryCo\Cloudflare\Enums\TelemetryqueryRunStatus $status = null,
		/** Time range for the query execution */
		public ?TelemetryqueryRunTimeframe $timeframe = null,
		/** ID of the user who initiated the query run. */
		public ?string $userId = null,
		/** ISO-8601 timestamp when the query run was created. */
		public ?string $created = null,
		/** Query performance statistics from the database (does not include network latency). */
		public ?TelemetryqueryRunStatistics $statistics = null,
		/** ISO-8601 timestamp when the query run was last updated. */
		public ?string $updated = null,
	) {
	}
}
