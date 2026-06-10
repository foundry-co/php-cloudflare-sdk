<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Sync Item.
 */
readonly class AiSearchNamespaceInstanceSyncItemRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Enums\AiSearchNamespaceInstanceSyncItemRequestNextAction $nextAction,
		/** Wait for indexing to fully complete before responding. On RAGs with vector indexing enabled, this additionally waits for Vectorize ingestion confirmation (up to 40s) so the returned item reflects a queryable state. On timeout the item is returned in `running` state and the background alarm continues polling. Defaults to false. */
		public ?bool $waitForCompletion = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'next_action' => $this->nextAction->value,
		    'wait_for_completion' => $this->waitForCompletion,
		], fn ($v) => $v !== null);
	}
}
