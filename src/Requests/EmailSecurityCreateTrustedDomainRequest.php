<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create trusted email domain
 */
readonly class EmailSecurityCreateTrustedDomainRequest
{
	public function __construct(
		/** Select to prevent recently registered domains from triggering a Suspicious or Malicious disposition. */
		public bool $isRecent,
		public bool $isRegex,
		/** Select for partner or other approved domains that have similar spelling to your connected domains. Prevents listed domains from triggering a Spoof disposition. */
		public bool $isSimilarity,
		public string $pattern,
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
		    'is_recent' => $this->isRecent,
		    'is_regex' => $this->isRegex,
		    'is_similarity' => $this->isSimilarity,
		    'pattern' => $this->pattern,
		    'comments' => $this->comments,
		    'created_at' => $this->createdAt,
		    'id' => $this->id,
		    'last_modified' => $this->lastModified,
		    'modified_at' => $this->modifiedAt,
		], fn ($v) => $v !== null);
	}
}
