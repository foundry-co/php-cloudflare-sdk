<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Response result for a batch origin cloud region operation.
 */
readonly class OriginCloudRegionsDelete
{
	public function __construct(
		/** Whether the setting can be modified by the current user. */
		public bool $editable,
		public \FoundryCo\Cloudflare\Enums\OriginCloudRegionsDeleteId $id,
		public OriginCloudRegionsDeleteValue $value,
		/** Time the mapping set was last modified. Null when no items were successfully applied. */
		public ?\DateTimeImmutable $modifiedOn = null,
	) {
	}
}
