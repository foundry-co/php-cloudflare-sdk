<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TelemetryqueryRequestParametersFiltersItem
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\TelemetryqueryRequestParametersFiltersItemFilterCombination $filterCombination = null,
		public ?array $filters = null,
		public ?\FoundryCo\Cloudflare\Enums\TelemetryqueryRequestParametersFiltersItemKind $kind = null,
		/** Filter field name. Use verified keys from previous query results or the keys endpoint. Common keys include $metadata.service, $metadata.origin, $metadata.trigger, $metadata.message, and $metadata.error. */
		public ?string $key = null,
		/** Comparison operator. String operators: includes, not_includes, starts_with, ends_with, regex. Existence: exists, is_null. Set membership: in, not_in (comma-separated values). Numeric: eq, neq, gt, gte, lt, lte. */
		public ?\FoundryCo\Cloudflare\Enums\TelemetryqueryRequestParametersFiltersItemOperation $operation = null,
		/** Data type of the filter field. Must match the actual type of the key being filtered. */
		public ?\FoundryCo\Cloudflare\Enums\TelemetryqueryRequestParametersFiltersItemType $type = null,
		/** Comparison value. Must match actual values in your data — verify with the values endpoint. Ensure the value type (string/number/boolean) matches the field type. String comparisons are case-sensitive. Regex uses RE2 syntax (no lookaheads/lookbehinds). */
		public mixed $value = null,
	) {
	}
}
