<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Response result for a list of origin cloud region mappings.
 */
readonly class OriginCloudRegionsUpsert
{
	public function __construct(
		/** Whether the setting can be modified by the current user. */
		public bool $editable,
		public \FoundryCo\Cloudflare\Enums\OriginCloudRegionsUpsertId $id,
		public array $value,
		/** Time the mapping set was last modified. Null when no mappings exist. */
		public ?\DateTimeImmutable $modifiedOn = null,
	) {
	}
}
