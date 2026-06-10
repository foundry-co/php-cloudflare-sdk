<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ListMitigationsMitigationsItem
{
	public function __construct(
		/** Date when the mitigation will become active. Time in RFC 3339 format (https://www.rfc-editor.org/rfc/rfc3339.html) */
		public ?string $effectiveDate = null,
		public ?string $entityId = null,
		/** The type of entity targeted by a mitigation. */
		public ?\FoundryCo\Cloudflare\Enums\ListMitigationsMitigationsItemEntityType $entityType = null,
		/** ID of remediation. */
		public ?string $id = null,
		/** The status of a mitigation */
		public ?\FoundryCo\Cloudflare\Enums\ListMitigationsMitigationsItemStatus $status = null,
		/** The type of mitigation applied to a reported entity. */
		public ?\FoundryCo\Cloudflare\Enums\ListMitigationsMitigationsItemType $type = null,
	) {
	}
}
