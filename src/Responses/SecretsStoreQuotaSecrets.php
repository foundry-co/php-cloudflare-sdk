<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SecretsStoreQuotaSecrets
{
	public function __construct(
		/** The number of secrets the account is entitlted to use */
		public float $quota,
		/** The number of secrets the account is currently using */
		public float $usage,
	) {
	}
}
