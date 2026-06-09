<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AuditLogsLogs
{
	public function __construct(
		/** Contains account related information. */
		public ?AuditLogsLogsAccount $account = null,
		/** Provides information about the action performed. */
		public ?AuditLogsLogsAction $action = null,
		public ?AuditLogsLogsActor $actor = null,
		/** A unique identifier for the audit log entry. */
		public ?string $id = null,
		/** Provides raw information about the request and response. */
		public ?AuditLogsLogsRaw $raw = null,
		/** Provides details about the affected resource. */
		public ?AuditLogsLogsResource $resource = null,
		/** Provides details about the zone affected by the action. */
		public ?AuditLogsLogsZone $zone = null,
	) {
	}
}
