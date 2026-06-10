<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * HTTP metadata associated with an R2 object.
 */
readonly class R2ListObjectsHttpMetadata
{
	public function __construct(
		/** Specifies caching behavior for the object. */
		public ?string $cacheControl = null,
		/** The date and time at which the object's cache entry expires. */
		public ?\DateTimeImmutable $cacheExpiry = null,
		/** Specifies presentational information for the object. */
		public ?string $contentDisposition = null,
		/** Specifies the content encoding applied to the object. */
		public ?string $contentEncoding = null,
		/** The language of the object content. */
		public ?string $contentLanguage = null,
		/** The MIME type of the object. */
		public ?string $contentType = null,
	) {
	}
}
