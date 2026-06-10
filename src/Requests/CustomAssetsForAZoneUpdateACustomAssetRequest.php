<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a custom asset
 */
readonly class CustomAssetsForAZoneUpdateACustomAssetRequest
{
	public function __construct(
		/** A short description of the custom asset. */
		public string $description,
		/** The URL where the asset content is fetched from. */
		public string $url,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'description' => $this->description,
		    'url' => $this->url,
		], fn ($v) => $v !== null);
	}
}
