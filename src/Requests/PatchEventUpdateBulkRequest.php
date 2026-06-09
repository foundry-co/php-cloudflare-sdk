<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Bulk update events
 */
readonly class PatchEventUpdateBulkRequest
{
	public function __construct(
		/** Dataset ID containing the events to update. Required to prevent cross-account modifications. */
		public string $datasetId,
		/** List of event UUIDs to update (1-100) */
		public array $eventIds,
		/** Fields to update on all specified events. All fields including 'insight' are supported, except 'date' which requires shard migration. */
		public \FoundryCo\Cloudflare\Responses\PatchEventUpdateBulkRequestUpdates $updates,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'datasetId' => $this->datasetId,
		    'eventIds' => $this->eventIds,
		    'updates' => $this->updates->toArray(),
		], fn ($v) => $v !== null);
	}
}
