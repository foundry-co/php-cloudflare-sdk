<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Preview Queue Messages
 */
readonly class QueuesPreviewMessagesRequest
{
	public function __construct(
		/** The maximum number of messages to include in a batch. */
		public ?float $batchSize = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'batch_size' => $this->batchSize,
		], fn ($v) => $v !== null);
	}
}
