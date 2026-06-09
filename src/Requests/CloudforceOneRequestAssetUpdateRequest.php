<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a Request Asset
 */
readonly class CloudforceOneRequestAssetUpdateRequest
{
	public function __construct(
		/** Asset file to upload. */
		public ?string $source = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'source' => $this->source,
		], fn ($v) => $v !== null);
	}
}
