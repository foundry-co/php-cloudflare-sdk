<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecurityMessageActionLogItem
{
	public function __construct(
		/** Timestamp when action completed */
		public \DateTimeImmutable $completedAt,
		/** Type of action performed */
		public \FoundryCo\Cloudflare\Enums\EmailSecurityMessageActionLogItemOperation $operation,
		/** Deprecated, use `completed_at` instead. End of life: November 1, 2026. */
		public ?string $completedTimestamp = null,
		/** Additional properties for the action */
		public ?EmailSecurityMessageActionLogItemProperties $properties = null,
		/** Status of the action */
		public ?string $status = null,
	) {
	}
}
