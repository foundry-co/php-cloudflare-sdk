<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Batch allow policies operations
 */
readonly class EmailSecurityBatchAllowPoliciesRequest
{
	public function __construct(
		public array $deletes,
		public array $patches,
		public array $posts,
		public array $puts,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'deletes' => $this->deletes,
		    'patches' => $this->patches,
		    'posts' => $this->posts,
		    'puts' => $this->puts,
		], fn ($v) => $v !== null);
	}
}
