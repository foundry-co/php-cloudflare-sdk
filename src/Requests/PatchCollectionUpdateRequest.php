<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update collection
 */
readonly class PatchCollectionUpdateRequest
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Responses\PatchCollectionUpdateRequestMetadata $metadata = null,
		/** Collection name */
		public ?string $name = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'metadata' => $this->metadata?->toArray(),
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
