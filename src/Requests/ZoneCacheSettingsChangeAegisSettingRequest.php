<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Change aegis setting
 */
readonly class ZoneCacheSettingsChangeAegisSettingRequest
{
	public function __construct(
		/** Value of the zone setting. */
		public \FoundryCo\Cloudflare\Responses\ZoneCacheSettingsChangeAegisSettingRequestValue $value,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'value' => $this->value->toArray(),
		], fn ($v) => $v !== null);
	}
}
