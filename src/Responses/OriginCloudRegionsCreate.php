<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Response result for a single origin cloud region mapping.
 */
readonly class OriginCloudRegionsCreate
{
	public function __construct(
		/** Whether the setting can be modified by the current user. */
		public ?bool $editable = null,
		public ?\FoundryCo\Cloudflare\Enums\OriginCloudRegionsCreateId $id = null,
		/** A single origin IP-to-cloud-region mapping. */
		public ?OriginCloudRegionsCreateValue $value = null,
		/** Time the mapping was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
	) {
	}
}
