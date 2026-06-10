<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecurityGetMessageActionLogItem
{
	public function __construct(
		/** Timestamp when action completed */
		public ?\DateTimeImmutable $completedAt = null,
		/** Type of action performed */
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityGetMessageActionLogItemOperation $operation = null,
		/** Deprecated, use `completed_at` instead. End of life: November 1, 2026. */
		public ?string $completedTimestamp = null,
		/** Additional properties for the action */
		public ?EmailSecurityGetMessageActionLogItemProperties $properties = null,
		/** Status of the action */
		public ?string $status = null,
	) {
	}
}
