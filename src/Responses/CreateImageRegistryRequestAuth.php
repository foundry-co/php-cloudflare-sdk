<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Credentials needed to authenticate with an external image registry.
 */
readonly class CreateImageRegistryRequestAuth
{
	public function __construct(
		public mixed $privateCredential,
		/** The format of this value is determined by the registry being configured. */
		public string $publicCredential,
	) {
	}
}
