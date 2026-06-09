<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * List values
 */
readonly class TelemetryvalueslistRequest
{
	public function __construct(
		/** Leave this empty to use the default datasets */
		public array $datasets,
		public string $key,
		public \FoundryCo\Cloudflare\Responses\TelemetryvalueslistRequestTimeframe $timeframe,
		public \FoundryCo\Cloudflare\Enums\TelemetryvalueslistRequestType $type,
		/** Apply filters before listing values. Supports nested groups via kind: 'group'. Maximum nesting depth is 4. */
		public ?array $filters = null,
		public ?float $limit = null,
		/** Full-text search expression to match events containing the specified text or pattern. */
		public ?\FoundryCo\Cloudflare\Responses\TelemetryvalueslistRequestNeedle $needle = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'datasets' => $this->datasets,
		    'key' => $this->key,
		    'timeframe' => $this->timeframe->toArray(),
		    'type' => $this->type->value,
		    'filters' => $this->filters,
		    'limit' => $this->limit,
		    'needle' => $this->needle?->toArray(),
		], fn ($v) => $v !== null);
	}
}
