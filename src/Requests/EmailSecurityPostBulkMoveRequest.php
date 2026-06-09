<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Move multiple messages
 */
readonly class EmailSecurityPostBulkMoveRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Enums\EmailSecurityPostBulkMoveRequestDestination $destination,
		/** List of message IDs to move */
		public ?array $ids = null,
		/** Deprecated, use `ids` instead. End of life: November 1, 2026. List of message IDs to move. */
		public ?array $postfixIds = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'destination' => $this->destination->value,
		    'ids' => $this->ids,
		    'postfix_ids' => $this->postfixIds,
		], fn ($v) => $v !== null);
	}
}
