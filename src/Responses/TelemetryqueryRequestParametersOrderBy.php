<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Ordering for grouped calculation results. Only effective when a group-by is present.
 */
readonly class TelemetryqueryRequestParametersOrderBy
{
	public function __construct(
		/** Alias of the calculation to order results by. Must match the alias (or operator) of a calculation in the query. */
		public string $value,
		/** Sort direction: 'asc' for ascending, 'desc' for descending. */
		public ?\FoundryCo\Cloudflare\Enums\TelemetryqueryRequestParametersOrderByOrder $order = null,
	) {
	}
}
