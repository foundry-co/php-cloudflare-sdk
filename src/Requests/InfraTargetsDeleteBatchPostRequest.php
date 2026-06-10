<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Delete targets
 */
readonly class InfraTargetsDeleteBatchPostRequest
{
	public function __construct(
		/** List of target IDs to bulk delete */
		public array $targetIds,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'target_ids' => $this->targetIds,
		], fn ($v) => $v !== null);
	}
}
