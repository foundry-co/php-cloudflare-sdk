<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Queue
 */
readonly class QueuesUpdateRequest
{
	public function __construct(
		public ?array $consumers = null,
		public ?float $consumersTotalCount = null,
		public ?string $createdOn = null,
		public ?string $modifiedOn = null,
		public ?array $producers = null,
		public ?float $producersTotalCount = null,
		public ?string $queueId = null,
		public ?string $queueName = null,
		public ?\FoundryCo\Cloudflare\Responses\QueuesUpdateRequestSettings $settings = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'consumers' => $this->consumers,
		    'consumers_total_count' => $this->consumersTotalCount,
		    'created_on' => $this->createdOn,
		    'modified_on' => $this->modifiedOn,
		    'producers' => $this->producers,
		    'producers_total_count' => $this->producersTotalCount,
		    'queue_id' => $this->queueId,
		    'queue_name' => $this->queueName,
		    'settings' => $this->settings?->toArray(),
		], fn ($v) => $v !== null);
	}
}
