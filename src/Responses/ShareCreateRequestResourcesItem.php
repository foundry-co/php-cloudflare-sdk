<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ShareCreateRequestResourcesItem
{
	public function __construct(
		/** Resource Metadata. */
		public array $meta,
		/** Account identifier. */
		public string $resourceAccountId,
		/** Share Resource identifier. */
		public string $resourceId,
		/** Resource Type. */
		public \FoundryCo\Cloudflare\Enums\ShareCreateRequestResourcesItemResourceType $resourceType,
	) {
	}
}
