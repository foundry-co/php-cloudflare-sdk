<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Run a query
 */
readonly class TelemetryqueryRequest
{
	public function __construct(
		/** Identifier for the query. When parameters are omitted, this ID is used to load a previously saved query's parameters. When providing parameters inline, pass any identifier (e.g. an ad-hoc ID). */
		public string $queryId,
		/** Timeframe for the query using Unix timestamps in milliseconds. Narrower timeframes produce faster responses and more specific results. */
		public \FoundryCo\Cloudflare\Responses\TelemetryqueryRequestTimeframe $timeframe,
		/** When true, includes time-series data in the response. */
		public ?bool $chart = null,
		/** When true, includes a comparison dataset from the previous time period of equal length. */
		public ?bool $compare = null,
		/** When true, executes the query without persisting the results. Useful for validation or previewing. */
		public ?bool $dry = null,
		/** Number of time-series buckets. Only used when view is 'calculations'. Omit to let the system auto-detect an appropriate granularity. */
		public ?float $granularity = null,
		/** When true, omits time-series data from the response and returns only aggregated values. Reduces response size when series are not needed. */
		public ?bool $ignoreSeries = null,
		/** Maximum number of events to return when view is 'events'. Also controls the number of group-by rows when view is 'calculations'. */
		public ?float $limit = null,
		/** Cursor for pagination in event, trace, and invocation views. Pass the $metadata.id of the last returned item to fetch the next page. */
		public ?string $offset = null,
		/** Numeric offset for paginating grouped/pattern results (top-N lists). Use together with limit. Not used by cursor-based pagination. */
		public ?float $offsetBy = null,
		/** Pagination direction: 'next' for forward, 'prev' for backward. */
		public ?string $offsetDirection = null,
		/** Query parameters defining what data to retrieve — filters, calculations, group-bys, and ordering. In practice this should always be provided for ad-hoc queries. Only omit when executing a previously saved query by queryId. Use the keys and values endpoints to discover available fields before building filters. */
		public ?\FoundryCo\Cloudflare\Responses\TelemetryqueryRequestParameters $parameters = null,
		/** Controls the shape of the response. 'events': individual log lines matching the query. 'calculations': aggregated metrics (count, avg, p99, etc.) with optional group-by breakdowns and time-series. 'invocations': events grouped by request ID. 'traces': distributed trace summaries. 'agents': Durable Object agent summaries. */
		public ?\FoundryCo\Cloudflare\Enums\TelemetryqueryRequestView $view = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'queryId' => $this->queryId,
		    'timeframe' => $this->timeframe->toArray(),
		    'chart' => $this->chart,
		    'compare' => $this->compare,
		    'dry' => $this->dry,
		    'granularity' => $this->granularity,
		    'ignoreSeries' => $this->ignoreSeries,
		    'limit' => $this->limit,
		    'offset' => $this->offset,
		    'offsetBy' => $this->offsetBy,
		    'offsetDirection' => $this->offsetDirection,
		    'parameters' => $this->parameters?->toArray(),
		    'view' => $this->view?->value,
		], fn ($v) => $v !== null);
	}
}
