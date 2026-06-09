<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Creates bulk events
 */
readonly class PostEventCreateBulkRequest
{
	public function __construct(
		public array $data,
		public string $datasetId,
		/** When true, response includes array of created event UUIDs and shard IDs. Useful for tracking which events were created and where. */
		public ?bool $includeCreatedEvents = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'data' => $this->data,
		    'datasetId' => $this->datasetId,
		    'includeCreatedEvents' => $this->includeCreatedEvents,
		], fn ($v) => $v !== null);
	}
}
