<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CustomAssetsForAZoneUpdateACustomAsset
{
	public function __construct(
		/** A short description of the custom asset. */
		public ?string $description = null,
		public ?\DateTimeImmutable $lastUpdated = null,
		/** The unique name of the custom asset. Can only contain letters (A-Z, a-z), numbers (0-9), and underscores (_). */
		public ?string $name = null,
		/** The size of the asset content in bytes. */
		public ?int $sizeBytes = null,
		/** The URL where the asset content is fetched from. */
		public ?string $url = null,
	) {
	}
}
