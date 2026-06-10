<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Acknowledge + Retry Queue Messages
 */
readonly class QueuesAckMessagesRequest
{
	public function __construct(
		public ?array $acks = null,
		public ?array $retries = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'acks' => $this->acks,
		    'retries' => $this->retries,
		], fn ($v) => $v !== null);
	}
}
