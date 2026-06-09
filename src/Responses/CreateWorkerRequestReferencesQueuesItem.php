<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CreateWorkerRequestReferencesQueuesItem
{
	public function __construct(
		/** ID of the queue consumer configuration. */
		public string $queueConsumerId,
		/** ID of the queue. */
		public string $queueId,
		/** Name of the queue. */
		public string $queueName,
	) {
	}
}
