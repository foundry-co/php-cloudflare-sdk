<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Change Origin H2 Max Streams Setting
 */
readonly class ZoneCacheSettingsChangeOriginH2MaxStreamsSettingRequest
{
	public function __construct(
		/** Value of the Origin H2 Max Streams Setting. */
		public int $value,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'value' => $this->value,
		], fn ($v) => $v !== null);
	}
}
