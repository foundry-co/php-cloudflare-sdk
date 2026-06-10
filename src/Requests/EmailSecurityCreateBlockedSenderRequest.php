<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create blocked email sender
 */
readonly class EmailSecurityCreateBlockedSenderRequest
{
	public function __construct(
		public bool $isRegex,
		public string $pattern,
		/**
		 * Type of pattern matching.
		 * Note: UNKNOWN is deprecated and cannot be used when creating or updating policies, but may be returned for existing entries.
		 */
		public \FoundryCo\Cloudflare\Enums\EmailSecurityCreateBlockedSenderRequestPatternType $patternType,
		public ?string $comments = null,
		public mixed $createdAt = null,
		public mixed $id = null,
		/** Deprecated, use `modified_at` instead. End of life: November 1, 2026. */
		public mixed $lastModified = null,
		public mixed $modifiedAt = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'is_regex' => $this->isRegex,
		    'pattern' => $this->pattern,
		    'pattern_type' => $this->patternType->value,
		    'comments' => $this->comments,
		    'created_at' => $this->createdAt,
		    'id' => $this->id,
		    'last_modified' => $this->lastModified,
		    'modified_at' => $this->modifiedAt,
		], fn ($v) => $v !== null);
	}
}
