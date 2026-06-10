<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZoneSettingsGetFontsSetting
{
	public function __construct(
		/** Whether or not this setting can be modified for this zone (based on your Cloudflare plan level). */
		public ?\FoundryCo\Cloudflare\Enums\ZoneSettingsGetFontsSettingEditable $editable = null,
		/** Identifier of the zone setting. */
		public ?string $id = null,
		/** last time this setting was modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** Current value of the zone setting. */
		public ?\FoundryCo\Cloudflare\Enums\ZoneSettingsGetFontsSettingValue $value = null,
	) {
	}
}
