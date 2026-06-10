<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SharesListResourcesItem
{
	public function __construct(
		/** When the share was created. */
		public ?\DateTimeImmutable $created = null,
		/** Share Resource identifier. */
		public ?string $id = null,
		/** Resource Metadata. */
		public ?array $meta = null,
		/** When the share was modified. */
		public ?\DateTimeImmutable $modified = null,
		/** Account identifier. */
		public ?string $resourceAccountId = null,
		/** Share Resource identifier. */
		public ?string $resourceId = null,
		/** Resource Type. */
		public ?\FoundryCo\Cloudflare\Enums\SharesListResourcesItemResourceType $resourceType = null,
		/** Resource Version. */
		public ?int $resourceVersion = null,
		/** Resource Status. */
		public ?\FoundryCo\Cloudflare\Enums\SharesListResourcesItemStatus $status = null,
	) {
	}
}
