<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AuditLogsV2GetOrganizationAuditLogs
{
	public function __construct(
		/** Provides information about the action performed. */
		public ?AuditLogsV2GetOrganizationAuditLogsAction $action = null,
		public ?AuditLogsV2GetOrganizationAuditLogsActor $actor = null,
		/** A unique identifier for the audit log entry. */
		public ?string $id = null,
		/** Contains organization related information. */
		public ?AuditLogsV2GetOrganizationAuditLogsOrganization $organization = null,
		/** Provides raw information about the request and response. */
		public ?AuditLogsV2GetOrganizationAuditLogsRaw $raw = null,
		/** Provides details about the affected resource. */
		public ?AuditLogsV2GetOrganizationAuditLogsResource $resource = null,
	) {
	}
}
