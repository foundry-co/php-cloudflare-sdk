<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a blocked email sender
 */
readonly class EmailSecurityUpdateBlockedSenderRequest
{
	public function __construct(
		public ?string $comments = null,
		public mixed $createdAt = null,
		public mixed $id = null,
		public ?bool $isRegex = null,
		/** Deprecated, use `modified_at` instead. End of life: November 1, 2026. */
		public mixed $lastModified = null,
		public mixed $modifiedAt = null,
		public ?string $pattern = null,
		/**
		 * Type of pattern matching.
		 * Note: UNKNOWN is deprecated and cannot be used when creating or updating policies, but may be returned for existing entries.
		 */
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityUpdateBlockedSenderRequestPatternType $patternType = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'comments' => $this->comments,
		    'created_at' => $this->createdAt,
		    'id' => $this->id,
		    'is_regex' => $this->isRegex,
		    'last_modified' => $this->lastModified,
		    'modified_at' => $this->modifiedAt,
		    'pattern' => $this->pattern,
		    'pattern_type' => $this->patternType?->value,
		], fn ($v) => $v !== null);
	}
}
