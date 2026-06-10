<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Response result for a list of origin cloud region mappings.
 */
readonly class OriginCloudRegionsList
{
	public function __construct(
		/** Whether the setting can be modified by the current user. */
		public ?bool $editable = null,
		public ?\FoundryCo\Cloudflare\Enums\OriginCloudRegionsListId $id = null,
		public ?array $value = null,
		/** Time the mapping set was last modified. Null when no mappings exist. */
		public ?\DateTimeImmutable $modifiedOn = null,
	) {
	}
}
