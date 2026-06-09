<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class QueuePurge
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
		public ?QueuePurgeSettings $settings = null,
	) {
	}
}
