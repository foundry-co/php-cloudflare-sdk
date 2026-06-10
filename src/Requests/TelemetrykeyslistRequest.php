<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * List keys
 */
readonly class TelemetrykeyslistRequest
{
	public function __construct(
		/** Leave this empty to use the default datasets */
		public ?array $datasets = null,
		/** Apply filters to narrow key discovery. Supports nested groups via kind: 'group'. Maximum nesting depth is 4. */
		public ?array $filters = null,
		public ?float $from = null,
		/** If the user suggests a key, use this to narrow down the list of keys returned. Make sure matchCase is false to avoid case sensitivity issues. */
		public ?\FoundryCo\Cloudflare\Responses\TelemetrykeyslistRequestKeyNeedle $keyNeedle = null,
		/** Advanced usage: set limit=1000+ to retrieve comprehensive key options without needing additional filtering. */
		public ?float $limit = null,
		/** Search for a specific substring in any of the events */
		public ?\FoundryCo\Cloudflare\Responses\TelemetrykeyslistRequestNeedle $needle = null,
		public ?float $to = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'datasets' => $this->datasets,
		    'filters' => $this->filters,
		    'from' => $this->from,
		    'keyNeedle' => $this->keyNeedle?->toArray(),
		    'limit' => $this->limit,
		    'needle' => $this->needle?->toArray(),
		    'to' => $this->to,
		], fn ($v) => $v !== null);
	}
}
