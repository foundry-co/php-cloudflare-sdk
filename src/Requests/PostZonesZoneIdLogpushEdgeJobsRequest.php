<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Instant Logs job
 */
readonly class PostZonesZoneIdLogpushEdgeJobsRequest
{
	public function __construct(
		/** Comma-separated list of fields. */
		public ?string $fields = null,
		/** Filters to drill down into specific events. */
		public ?string $filter = null,
		/** The sample parameter is the sample rate of the records set by the client: "sample": 1 is 100% of records "sample": 10 is 10% and so on. */
		public ?int $sample = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'fields' => $this->fields,
		    'filter' => $this->filter,
		    'sample' => $this->sample,
		], fn ($v) => $v !== null);
	}
}
