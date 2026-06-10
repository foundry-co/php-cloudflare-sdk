<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZoneCacheSettingsChangeCacheReserveSetting
{
	public function __construct(
		/** Identifier of the zone setting. */
		public ?string $id = null,
		/** Value of the Cache Reserve zone setting. */
		public ?\FoundryCo\Cloudflare\Enums\ZoneCacheSettingsChangeCacheReserveSettingValue $value = null,
		/** Last time this setting was modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
	) {
	}
}
