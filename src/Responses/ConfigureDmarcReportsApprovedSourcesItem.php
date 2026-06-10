<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A single approved sending source
 */
readonly class ConfigureDmarcReportsApprovedSourcesItem
{
	public function __construct(
		/** Deprecated, use created_at */
		public ?\DateTimeImmutable $created = null,
		/** Creation timestamp */
		public ?\DateTimeImmutable $createdAt = null,
		/** The source domain */
		public ?string $domain = null,
		/** Resolved IP addresses from SPF */
		public ?array $ips = null,
		/** Deprecated, use modified_at */
		public ?\DateTimeImmutable $modified = null,
		/** Last modification timestamp */
		public ?\DateTimeImmutable $modifiedAt = null,
		/** Source name (typically same as domain) */
		public ?string $name = null,
		/** URL-friendly identifier */
		public ?string $slug = null,
		/** Source UUID */
		public ?string $tag = null,
	) {
	}
}
