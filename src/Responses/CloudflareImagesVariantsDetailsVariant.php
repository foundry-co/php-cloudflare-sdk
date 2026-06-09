<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CloudflareImagesVariantsDetailsVariant
{
	public function __construct(
		public string $id,
		/** Allows you to define image resizing sizes for different use cases. */
		public CloudflareImagesVariantsDetailsVariantOptions $options,
		/** Indicates whether the variant can access an image without a signature, regardless of image access control. */
		public ?bool $neverRequireSignedURLs = null,
	) {
	}
}
