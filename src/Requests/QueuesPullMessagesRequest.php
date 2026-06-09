<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Pull Queue Messages
 */
readonly class QueuesPullMessagesRequest
{
	public function __construct(
		/** The maximum number of messages to include in a batch. */
		public ?float $batchSize = null,
		/** The number of milliseconds that a message is exclusively leased. After the timeout, the message becomes available for another attempt. */
		public ?float $visibilityTimeoutMs = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'batch_size' => $this->batchSize,
		    'visibility_timeout_ms' => $this->visibilityTimeoutMs,
		], fn ($v) => $v !== null);
	}
}
