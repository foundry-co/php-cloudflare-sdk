<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Push Message Batch
 */
readonly class QueuesPushMessagesRequest
{
	public function __construct(
		/** The number of seconds to wait for attempting to deliver this batch to consumers */
		public ?float $delaySeconds = null,
		public ?array $messages = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'delay_seconds' => $this->delaySeconds,
		    'messages' => $this->messages,
		], fn ($v) => $v !== null);
	}
}
