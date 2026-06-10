<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Enable validation for a schema
 */
readonly class ApiShieldSchemaValidationEnableValidationForASchemaRequest
{
	public function __construct(
		public mixed $validationEnabled = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'validation_enabled' => $this->validationEnabled,
		], fn ($v) => $v !== null);
	}
}
