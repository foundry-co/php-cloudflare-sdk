<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZoneSettingsSetting
{
	public function __construct(
		/** ID of the zone setting. */
		public \FoundryCo\Cloudflare\Enums\ZoneSettingsSettingId $id,
		/** Last time this setting was modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** Value of the zone setting. */
		public ?ZoneSettingsSettingValue $value = null,
	) {
	}
}
