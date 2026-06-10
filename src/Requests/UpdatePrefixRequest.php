<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update prefix.
 */
readonly class UpdatePrefixRequest
{
	public function __construct(
		/** A new comment for the prefix. Optional. */
		public ?string $comment = null,
		/** Whether to exclude the prefix from protection. Optional. */
		public ?bool $excluded = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'comment' => $this->comment,
		    'excluded' => $this->excluded,
		], fn ($v) => $v !== null);
	}
}
