<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Prepare live tail
 */
readonly class TelemetryliveTailpostRequest
{
	public function __construct(
		/** Set a flag to describe how to combine the filters on the query. */
		public ?\FoundryCo\Cloudflare\Enums\TelemetryliveTailpostRequestFilterCombination $filterCombination = null,
		/** Apply filters to the query. Supports nested groups via kind: 'group'. */
		public ?array $filters = null,
		public ?string $scriptId = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'filterCombination' => $this->filterCombination?->value,
		    'filters' => $this->filters,
		    'scriptId' => $this->scriptId,
		], fn ($v) => $v !== null);
	}
}
