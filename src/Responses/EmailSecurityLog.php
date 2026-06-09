<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecurityLog
{
	public function __construct(
		public \FoundryCo\Cloudflare\Enums\EmailSecurityLogOperation $operation,
		/** Timestamp when the action completed */
		public ?\DateTimeImmutable $completedAt = null,
		public ?EmailSecurityLogProperties $properties = null,
		/** Timestamp when the action was initiated */
		public ?\DateTimeImmutable $startedAt = null,
		public ?string $status = null,
	) {
	}
}
