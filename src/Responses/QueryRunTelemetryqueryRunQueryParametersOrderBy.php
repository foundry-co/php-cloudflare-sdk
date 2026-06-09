<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configure the order of the results returned by the query.
 */
readonly class QueryRunTelemetryqueryRunQueryParametersOrderBy
{
	public function __construct(
		/** Configure which Calculation to order the results by. */
		public string $value,
		/** Set the order of the results */
		public ?\FoundryCo\Cloudflare\Enums\QueryRunTelemetryqueryRunQueryParametersOrderByOrder $order = null,
	) {
	}
}
