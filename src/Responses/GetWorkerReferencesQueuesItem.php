<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetWorkerReferencesQueuesItem
{
	public function __construct(
		/** ID of the queue consumer configuration. */
		public ?string $queueConsumerId = null,
		/** ID of the queue. */
		public ?string $queueId = null,
		/** Name of the queue. */
		public ?string $queueName = null,
	) {
	}
}
