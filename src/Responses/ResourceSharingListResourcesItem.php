<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ResourceSharingListResourcesItem
{
	public function __construct(
		public array $created,
		public array $id,
		public array $meta,
		public array $modified,
		public array $resourceAccountId,
		public array $resourceId,
		public array $resourceType,
		public array $resourceVersion,
		public array $status,
	) {
	}
}
