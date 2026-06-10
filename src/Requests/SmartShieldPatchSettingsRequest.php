<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Patch Smart Shield Settings
 */
readonly class SmartShieldPatchSettingsRequest
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Responses\SmartShieldPatchSettingsRequestCacheReserve $cacheReserve = null,
		public ?\FoundryCo\Cloudflare\Responses\SmartShieldPatchSettingsRequestRegionalTieredCache $regionalTieredCache = null,
		public ?\FoundryCo\Cloudflare\Responses\SmartShieldPatchSettingsRequestSmartRouting $smartRouting = null,
		public ?\FoundryCo\Cloudflare\Responses\SmartShieldPatchSettingsRequestSmartTieredCache $smartTieredCache = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'cache_reserve' => $this->cacheReserve?->toArray(),
		    'regional_tiered_cache' => $this->regionalTieredCache?->toArray(),
		    'smart_routing' => $this->smartRouting?->toArray(),
		    'smart_tiered_cache' => $this->smartTieredCache?->toArray(),
		], fn ($v) => $v !== null);
	}
}
