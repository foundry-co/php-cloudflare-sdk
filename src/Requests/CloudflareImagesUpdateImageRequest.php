<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update image
 */
readonly class CloudflareImagesUpdateImageRequest
{
	public function __construct(
		/** Can set the creator field with an internal user ID. */
		public ?string $creator = null,
		/** User modifiable key-value store. Can be used for keeping references to another system of record for managing images. No change if not specified. */
		public ?array $metadata = null,
		/** Indicates whether the image can be accessed using only its UID. If set to `true`, a signed token needs to be generated with a signing key to view the image. Returns a new UID on a change. No change if not specified. */
		public ?bool $requireSignedURLs = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'creator' => $this->creator,
		    'metadata' => $this->metadata,
		    'requireSignedURLs' => $this->requireSignedURLs,
		], fn ($v) => $v !== null);
	}
}
