<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create or Update Item.
 */
readonly class AiSearchNamespaceInstanceCreateOrUpdateItemRequest
{
	public function __construct(
		/** Item key / filename. Must not exceed 128 characters. */
		public string $key,
		public \FoundryCo\Cloudflare\Enums\AiSearchNamespaceInstanceCreateOrUpdateItemRequestNextAction $nextAction,
		/** Wait for indexing to fully complete before responding. On RAGs with vector indexing enabled, this additionally waits for Vectorize ingestion confirmation (up to 40s) so the returned item reflects a queryable state. On timeout the item is returned in `running` state and the background alarm continues polling. Defaults to false. */
		public ?bool $waitForCompletion = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'key' => $this->key,
		    'next_action' => $this->nextAction->value,
		    'wait_for_completion' => $this->waitForCompletion,
		], fn ($v) => $v !== null);
	}
}
