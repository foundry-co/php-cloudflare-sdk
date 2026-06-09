<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CloudflareImagesDetails
{
	public function __construct(
		/** Can set the creator field with an internal user ID. */
		public ?string $creator = null,
		/** Image file name. */
		public ?string $filename = null,
		/** Image unique identifier. */
		public ?string $id = null,
		/** User modifiable key-value store. Can be used for keeping references to another system of record for managing images. Metadata must not exceed 1024 bytes. */
		public ?array $meta = null,
		/** Indicates whether the image can be a accessed only using it's UID. If set to true, a signed token needs to be generated with a signing key to view the image. */
		public ?bool $requireSignedURLs = null,
		/** When the media item was uploaded. */
		public ?\DateTimeImmutable $uploaded = null,
		/** Object specifying available variants for an image. */
		public ?array $variants = null,
	) {
	}
}
