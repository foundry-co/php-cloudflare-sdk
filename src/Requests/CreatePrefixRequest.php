<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create prefix.
 */
readonly class CreatePrefixRequest
{
	public function __construct(
		/** A comment describing the prefix. */
		public string $comment,
		/** Whether to exclude the prefix from protection. */
		public bool $excluded,
		/** The prefix to add in CIDR format. */
		public string $prefix,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'comment' => $this->comment,
		    'excluded' => $this->excluded,
		    'prefix' => $this->prefix,
		], fn ($v) => $v !== null);
	}
}
