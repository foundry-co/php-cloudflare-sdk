<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a sending domain restriction
 */
readonly class EmailSecurityUpdateSendingDomainRestrictionRequest
{
	public function __construct(
		public ?string $comments = null,
		public mixed $createdAt = null,
		/** Domain that requires TLS enforcement. */
		public ?string $domain = null,
		/** Excluded subdomains that are exempt from TLS requirements. */
		public ?array $exclude = null,
		public mixed $id = null,
		/** Deprecated, use `modified_at` instead. End of life: November 1, 2026. */
		public mixed $lastModified = null,
		public mixed $modifiedAt = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'comments' => $this->comments,
		    'created_at' => $this->createdAt,
		    'domain' => $this->domain,
		    'exclude' => $this->exclude,
		    'id' => $this->id,
		    'last_modified' => $this->lastModified,
		    'modified_at' => $this->modifiedAt,
		], fn ($v) => $v !== null);
	}
}
