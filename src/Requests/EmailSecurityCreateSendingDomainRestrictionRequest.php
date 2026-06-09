<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a sending domain restriction
 */
readonly class EmailSecurityCreateSendingDomainRestrictionRequest
{
	public function __construct(
		/** Domain that requires TLS enforcement. */
		public string $domain,
		/** Excluded subdomains that are exempt from TLS requirements. */
		public array $exclude,
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
		    'domain' => $this->domain,
		    'exclude' => $this->exclude,
		    'comments' => $this->comments,
		    'created_at' => $this->createdAt,
		    'id' => $this->id,
		    'last_modified' => $this->lastModified,
		    'modified_at' => $this->modifiedAt,
		], fn ($v) => $v !== null);
	}
}
