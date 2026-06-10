<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AuditLogsV2GetAccountAuditLogs
{
	public function __construct(
		/** Contains account related information. */
		public ?AuditLogsV2GetAccountAuditLogsAccount $account = null,
		/** Provides information about the action performed. */
		public ?AuditLogsV2GetAccountAuditLogsAction $action = null,
		public ?AuditLogsV2GetAccountAuditLogsActor $actor = null,
		/** A unique identifier for the audit log entry. */
		public ?string $id = null,
		/** Provides raw information about the request and response. */
		public ?AuditLogsV2GetAccountAuditLogsRaw $raw = null,
		/** Provides details about the affected resource. */
		public ?AuditLogsV2GetAccountAuditLogsResource $resource = null,
		/** Provides details about the zone affected by the action. */
		public ?AuditLogsV2GetAccountAuditLogsZone $zone = null,
	) {
	}
}
