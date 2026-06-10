<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecurityGetPhishguardReports
{
	public function __construct(
		public ?string $content = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityGetPhishguardReportsDisposition $disposition = null,
		public ?EmailSecurityGetPhishguardReportsFields $fields = null,
		public ?int $id = null,
		public ?string $priority = null,
		public ?string $title = null,
		public ?\DateTimeImmutable $createdAt = null,
		public ?array $tags = null,
		/** Deprecated, use `created_at` instead */
		public ?\DateTimeImmutable $ts = null,
		public ?\DateTimeImmutable $updatedAt = null,
	) {
	}
}
