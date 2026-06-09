<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Response result for a single origin cloud region mapping.
 */
readonly class OriginCloudRegionsGet
{
	public function __construct(
		/** Whether the setting can be modified by the current user. */
		public bool $editable,
		public \FoundryCo\Cloudflare\Enums\OriginCloudRegionsGetId $id,
		/** A single origin IP-to-cloud-region mapping. */
		public OriginCloudRegionsGetValue $value,
		/** Time the mapping was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
	) {
	}
}
