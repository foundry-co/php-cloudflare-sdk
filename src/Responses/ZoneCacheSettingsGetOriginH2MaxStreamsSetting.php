<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZoneCacheSettingsGetOriginH2MaxStreamsSetting
{
	public function __construct(
		/** Identifier of the zone setting. */
		public ?string $id = null,
		/** Last time this setting was modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** Value of the Origin H2 Max Streams Setting. */
		public ?int $value = null,
	) {
	}
}
