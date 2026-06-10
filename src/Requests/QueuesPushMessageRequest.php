<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Push Message
 */
readonly class QueuesPushMessageRequest
{
	public function __construct(
		/** The number of seconds to wait for attempting to deliver this message to consumers */
		public ?float $delaySeconds = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'delay_seconds' => $this->delaySeconds,
		], fn ($v) => $v !== null);
	}
}
