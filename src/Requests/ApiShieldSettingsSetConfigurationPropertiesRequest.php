<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update configuration properties
 */
readonly class ApiShieldSettingsSetConfigurationPropertiesRequest
{
	public function __construct(
		public array $authIdCharacteristics,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'auth_id_characteristics' => $this->authIdCharacteristics,
		], fn ($v) => $v !== null);
	}
}
