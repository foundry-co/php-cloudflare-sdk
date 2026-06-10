<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Change Origin Max HTTP Version Setting
 */
readonly class ZoneCacheSettingsChangeOriginMaxHttpVersionSettingRequest
{
	public function __construct(
		/** Value of the Origin Max HTTP Version Setting. */
		public \FoundryCo\Cloudflare\Enums\ZoneCacheSettingsChangeOriginMaxHttpVersionSettingRequestValue $value,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'value' => $this->value->value,
		], fn ($v) => $v !== null);
	}
}
