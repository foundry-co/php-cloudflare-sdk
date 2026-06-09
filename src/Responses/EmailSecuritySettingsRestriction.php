<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A sending domain restriction that enforces TLS (Transport Layer Security) requirements for emails from specific domains. If TLS is required, mail without TLS from the specified domain will be dropped.
 */
readonly class EmailSecuritySettingsRestriction
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
}
