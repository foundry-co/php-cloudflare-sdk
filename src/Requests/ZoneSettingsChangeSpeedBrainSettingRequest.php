<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Change Cloudflare Speed Brain setting
 */
readonly class ZoneSettingsChangeSpeedBrainSettingRequest
{
	public function __construct(
		/** Whether the feature is enabled or disabled. */
		public \FoundryCo\Cloudflare\Enums\ZoneSettingsChangeSpeedBrainSettingRequestValue $value,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'value' => $this->value->value,
		], fn ($v) => $v !== null);
	}
}
