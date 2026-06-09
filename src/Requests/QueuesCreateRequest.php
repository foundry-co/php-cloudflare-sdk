<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Queue
 */
readonly class QueuesCreateRequest
{
	public function __construct(
		public string $queueName,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'queue_name' => $this->queueName,
		], fn ($v) => $v !== null);
	}
}
