<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetSecurityCenterAccountAuditLog
{
	public function __construct(
		/** The timestamp when the change occurred. */
		public ?\DateTimeImmutable $changedAt = null,
		/** The actor that made the change. 'system' for automated changes, or a user identifier. */
		public ?string $changedBy = null,
		/** The value of the field after the change. Null if the field was cleared. */
		public ?string $currentValue = null,
		/** The field that was changed. */
		public ?\FoundryCo\Cloudflare\Enums\GetSecurityCenterAccountAuditLogFieldChanged $fieldChanged = null,
		/** UUIDv7 identifier for the audit log entry, time-ordered. */
		public ?string $id = null,
		/** The ID of the insight this audit log entry relates to. */
		public ?string $issueId = null,
		/** The value of the field before the change. Null if the field was not previously set. */
		public ?string $previousValue = null,
		/** Optional rationale provided for the change. */
		public ?string $rationale = null,
		/** The zone ID associated with the insight. Only present for zone-level insights. */
		public ?int $zoneId = null,
	) {
	}
}
