<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Generate a JWT to interact with the specified image registry.
 */
readonly class GenerateImageRegistryCredentialsRequest
{
	public function __construct(
		/** The number of minutes the credentials will be valid for. */
		public int $expirationMinutes,
		public array $permissions,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'expiration_minutes' => $this->expirationMinutes,
		    'permissions' => $this->permissions->value,
		], fn ($v) => $v !== null);
	}
}
