<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A single R2 bucket.
 */
readonly class R2ListBucketsBucketsItem
{
	public function __construct(
		/** Creation timestamp. */
		public ?string $creationDate = null,
		/** Jurisdiction where objects in this bucket are guaranteed to be stored. */
		public ?\FoundryCo\Cloudflare\Enums\R2ListBucketsBucketsItemJurisdiction $jurisdiction = null,
		/** Location of the bucket. */
		public ?\FoundryCo\Cloudflare\Enums\R2ListBucketsBucketsItemLocation $location = null,
		/** Name of the bucket. */
		public ?string $name = null,
		/** Storage class for newly uploaded objects, unless specified otherwise. */
		public ?\FoundryCo\Cloudflare\Enums\R2ListBucketsBucketsItemStorageClass $storageClass = null,
	) {
	}
}
