<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecurityReports
{
	public function __construct(
		public string $content,
		public \FoundryCo\Cloudflare\Enums\EmailSecurityReportsDisposition $disposition,
		public EmailSecurityReportsFields $fields,
		public int $id,
		public string $priority,
		public string $title,
		public ?\DateTimeImmutable $createdAt = null,
		public ?array $tags = null,
		/** Deprecated, use `created_at` instead */
		public ?\DateTimeImmutable $ts = null,
		public ?\DateTimeImmutable $updatedAt = null,
	) {
	}
}
