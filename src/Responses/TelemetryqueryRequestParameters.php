<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Query parameters defining what data to retrieve — filters, calculations, group-bys, and ordering. In practice this should always be provided for ad-hoc queries. Only omit when executing a previously saved query by queryId. Use the keys and values endpoints to discover available fields before building filters.
 */
readonly class TelemetryqueryRequestParameters
{
	public function __construct(
		/** Aggregation calculations to compute (e.g. count, avg, p99). Each calculation produces aggregate values and optional time-series data. */
		public ?array $calculations = null,
		/** Datasets to query. Leave empty to query all available datasets. */
		public ?array $datasets = null,
		/** Logical operator for combining top-level filters: 'and' (all must match) or 'or' (any must match). Defaults to 'and'. */
		public ?\FoundryCo\Cloudflare\Enums\TelemetryqueryRequestParametersFilterCombination $filterCombination = null,
		/** Filters to narrow query results. Use the keys and values endpoints to discover available fields before building filters. Supports nested groups via kind: 'group'. Maximum nesting depth is 4. */
		public ?array $filters = null,
		/** Fields to group calculation results by. Only applicable when the query view is 'calculations'. Produces per-group aggregate values. */
		public ?array $groupBys = null,
		/** Post-aggregation filters applied to calculation results. Use to filter groups after aggregation (e.g. only groups where count > 100). */
		public ?array $havings = null,
		/** Maximum number of group-by rows to return in calculation results. A value of 10 is a sensible default for most use cases. */
		public ?int $limit = null,
		/** Full-text search expression applied across all event fields. Matches events containing the specified text. */
		public ?TelemetryqueryRequestParametersNeedle $needle = null,
		/** Ordering for grouped calculation results. Only effective when a group-by is present. */
		public ?TelemetryqueryRequestParametersOrderBy $orderBy = null,
	) {
	}
}
