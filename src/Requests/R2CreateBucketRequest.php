<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Bucket
 */
readonly class R2CreateBucketRequest
{
	public function __construct(
		/** Name of the bucket. */
		public string $name,
		/** Location of the bucket. */
		public ?\FoundryCo\Cloudflare\Enums\R2CreateBucketRequestLocationHint $locationHint = null,
		/** Storage class for newly uploaded objects, unless specified otherwise. */
		public ?\FoundryCo\Cloudflare\Enums\R2CreateBucketRequestStorageClass $storageClass = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'locationHint' => $this->locationHint?->value,
		    'storageClass' => $this->storageClass?->value,
		], fn ($v) => $v !== null);
	}
}
