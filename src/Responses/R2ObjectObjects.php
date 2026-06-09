<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Metadata for an R2 object.
 */
readonly class R2ObjectObjects
{
	public function __construct(
		/** Custom metadata key-value pairs associated with the object. */
		public ?array $customMetadata = null,
		/**
		 * The entity tag for the object. In JSON list/get responses this is the raw
		 * hex digest (without surrounding quotes). The HTTP `ETag` response header on
		 * Get Object follows RFC 7232 and IS wrapped in surrounding double-quotes.
		 */
		public ?string $etag = null,
		/** HTTP metadata associated with an R2 object. */
		public ?R2ObjectObjectsHttpMetadata $httpMetadata = null,
		/** The object key (name). */
		public ?string $key = null,
		/** The date and time the object was last modified. */
		public ?\DateTimeImmutable $lastModified = null,
		/** The size of the object in bytes. */
		public ?int $size = null,
		/** Whether the object is encrypted with a customer-supplied encryption key. */
		public ?bool $ssec = null,
		/** Storage class for newly uploaded objects, unless specified otherwise. */
		public ?\FoundryCo\Cloudflare\Enums\R2ObjectObjectsStorageClass $storageClass = null,
	) {
	}
}
