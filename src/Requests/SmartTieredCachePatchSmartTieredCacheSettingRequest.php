<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Patch Smart Tiered Cache setting
 */
readonly class SmartTieredCachePatchSmartTieredCacheSettingRequest
{
	public function __construct(
		/** Enable or disable the Smart Tiered Cache. */
		public \FoundryCo\Cloudflare\Enums\SmartTieredCachePatchSmartTieredCacheSettingRequestValue $value,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'value' => $this->value->value,
		], fn ($v) => $v !== null);
	}
}
