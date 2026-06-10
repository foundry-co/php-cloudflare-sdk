<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a custom asset
 */
readonly class CustomAssetsForAZoneCreateACustomAssetRequest
{
	public function __construct(
		/** A short description of the custom asset. */
		public string $description,
		/** The unique name of the custom asset. Can only contain letters (A-Z, a-z), numbers (0-9), and underscores (_). */
		public string $name,
		/** The URL where the asset content is fetched from. */
		public string $url,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'description' => $this->description,
		    'name' => $this->name,
		    'url' => $this->url,
		], fn ($v) => $v !== null);
	}
}
