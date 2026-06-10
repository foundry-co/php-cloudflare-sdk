<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new share resource
 */
readonly class ShareResourceCreateRequest
{
	public function __construct(
		/** Resource Metadata. */
		public array $meta,
		/** Account identifier. */
		public string $resourceAccountId,
		/** Share Resource identifier. */
		public string $resourceId,
		/** Resource Type. */
		public \FoundryCo\Cloudflare\Enums\ShareResourceCreateRequestResourceType $resourceType,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'meta' => $this->meta,
		    'resource_account_id' => $this->resourceAccountId,
		    'resource_id' => $this->resourceId,
		    'resource_type' => $this->resourceType->value,
		], fn ($v) => $v !== null);
	}
}
