<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Get multiple key-value pairs
 */
readonly class WorkersKvNamespaceGetMultipleKeyValuePairsRequest
{
	public function __construct(
		/** Array of keys to retrieve (maximum of 100). */
		public array $keys,
		/** Whether to parse JSON values in the response. */
		public ?\FoundryCo\Cloudflare\Enums\WorkersKvNamespaceGetMultipleKeyValuePairsRequestType $type = null,
		/** Whether to include metadata in the response. */
		public ?bool $withMetadata = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'keys' => $this->keys,
		    'type' => $this->type?->value,
		    'withMetadata' => $this->withMetadata,
		], fn ($v) => $v !== null);
	}
}
