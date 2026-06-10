<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Smart Tiered Cache setting
 */
readonly class SmartTieredCacheCreateSmartTieredCacheSettingRequest
{
	public function __construct(
		/** Enable or disable the Smart Tiered Cache. */
		public \FoundryCo\Cloudflare\Enums\SmartTieredCacheCreateSmartTieredCacheSettingRequestValue $value,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'value' => $this->value->value,
		], fn ($v) => $v !== null);
	}
}
