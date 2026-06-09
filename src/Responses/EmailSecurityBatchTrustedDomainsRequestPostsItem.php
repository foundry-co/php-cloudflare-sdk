<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecurityBatchTrustedDomainsRequestPostsItem
{
	public function __construct(
		public ?string $comments = null,
		public mixed $createdAt = null,
		public mixed $id = null,
		/** Select to prevent recently registered domains from triggering a Suspicious or Malicious disposition. */
		public ?bool $isRecent = null,
		public ?bool $isRegex = null,
		/** Select for partner or other approved domains that have similar spelling to your connected domains. Prevents listed domains from triggering a Spoof disposition. */
		public ?bool $isSimilarity = null,
		/** Deprecated, use `modified_at` instead. End of life: November 1, 2026. */
		public mixed $lastModified = null,
		public mixed $modifiedAt = null,
		public ?string $pattern = null,
	) {
	}
}
