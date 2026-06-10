<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ShareCreateRequestResourcesItem
{
	public function __construct(
		/** Resource Metadata. */
		public ?array $meta = null,
		/** Account identifier. */
		public ?string $resourceAccountId = null,
		/** Share Resource identifier. */
		public ?string $resourceId = null,
		/** Resource Type. */
		public ?\FoundryCo\Cloudflare\Enums\ShareCreateRequestResourcesItemResourceType $resourceType = null,
	) {
	}
}
