<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Copies specified events from one dataset to another dataset
 */
readonly class PostEventCopyToNewDSRequest
{
	public function __construct(
		public string $destDatasetId,
		public array $eventIds,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'destDatasetId' => $this->destDatasetId,
		    'eventIds' => $this->eventIds,
		], fn ($v) => $v !== null);
	}
}
