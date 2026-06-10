<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CloudflareImagesCreateAuthenticatedDirectUploadUrlV2
{
	public function __construct(
		/** Image unique identifier. */
		public ?string $id = null,
		/** The URL the unauthenticated upload can be performed to using a single HTTP POST (multipart/form-data) request. */
		public ?string $uploadURL = null,
	) {
	}
}
