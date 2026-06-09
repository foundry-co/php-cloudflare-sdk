<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecurityReportsFields
{
	public function __construct(
		public array $to,
		public ?string $from = null,
		public ?\DateTimeImmutable $occurredAt = null,
		public ?string $postfixId = null,
		/** Deprecated, use `occurred_at` instead */
		public ?\DateTimeImmutable $ts = null,
	) {
	}
}
