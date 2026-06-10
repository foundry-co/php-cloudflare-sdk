<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Change variants setting
 */
readonly class ZoneCacheSettingsChangeVariantsSettingRequest
{
	public function __construct(
		/** Value of the zone setting. */
		public \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsChangeVariantsSettingRequestValue $value,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'value' => $this->value->toArray(),
		], fn ($v) => $v !== null);
	}
}
