<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class QueryRunTelemetryqueryRunQueryParameters
{
	public function __construct(
		/** Create Calculations to compute as part of the query. */
		public ?array $calculations = null,
		/** Set the Datasets to query. Leave it empty to query all the datasets. */
		public ?array $datasets = null,
		/** Set a Flag to describe how to combine the filters on the query. */
		public ?\FoundryCo\Cloudflare\Enums\QueryRunTelemetryqueryRunQueryParametersFilterCombination $filterCombination = null,
		/** Configure the Filters to apply to the query. Supports nested groups via kind: 'group'. */
		public ?array $filters = null,
		/** Define how to group the results of the query. */
		public ?array $groupBys = null,
		/** Configure the Having clauses that filter on calculations in the query result. */
		public ?array $havings = null,
		/** Set a limit on the number of results / records returned by the query */
		public ?int $limit = null,
		/** Define an expression to search using full-text search. */
		public ?QueryRunTelemetryqueryRunQueryParametersNeedle $needle = null,
		/** Configure the order of the results returned by the query. */
		public ?QueryRunTelemetryqueryRunQueryParametersOrderBy $orderBy = null,
	) {
	}
}
