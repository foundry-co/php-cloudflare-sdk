<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a share resource
 */
readonly class ShareResourceUpdateRequest
{
	public function __construct(
		/** Resource Metadata. */
		public array $meta,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'meta' => $this->meta,
		], fn ($v) => $v !== null);
	}
}
