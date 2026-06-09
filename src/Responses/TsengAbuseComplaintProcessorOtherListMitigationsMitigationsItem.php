<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TsengAbuseComplaintProcessorOtherListMitigationsMitigationsItem
{
	public function __construct(
		/** Date when the mitigation will become active. Time in RFC 3339 format (https://www.rfc-editor.org/rfc/rfc3339.html) */
		public string $effectiveDate,
		public string $entityId,
		/** The type of entity targeted by a mitigation. */
		public \FoundryCo\Cloudflare\Enums\TsengAbuseComplaintProcessorOtherListMitigationsMitigationsItemEntityType $entityType,
		/** ID of remediation. */
		public string $id,
		/** The status of a mitigation */
		public \FoundryCo\Cloudflare\Enums\TsengAbuseComplaintProcessorOtherListMitigationsMitigationsItemStatus $status,
		/** The type of mitigation applied to a reported entity. */
		public \FoundryCo\Cloudflare\Enums\TsengAbuseComplaintProcessorOtherListMitigationsMitigationsItemType $type,
	) {
	}
}
