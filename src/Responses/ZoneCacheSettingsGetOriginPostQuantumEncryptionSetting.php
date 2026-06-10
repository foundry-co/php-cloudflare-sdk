<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZoneCacheSettingsGetOriginPostQuantumEncryptionSetting
{
	public function __construct(
		/** Identifier of the zone setting. */
		public ?string $id = null,
		/** Value of the Origin Post Quantum Encryption Setting. */
		public ?\FoundryCo\Cloudflare\Enums\ZoneCacheSettingsGetOriginPostQuantumEncryptionSettingValue $value = null,
		/** Last time this setting was modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
	) {
	}
}
