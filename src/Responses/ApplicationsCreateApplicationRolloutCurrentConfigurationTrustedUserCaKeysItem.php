<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * SSH public key provided by the user
 */
readonly class ApplicationsCreateApplicationRolloutCurrentConfigurationTrustedUserCaKeysItem
{
	public function __construct(
		public array $publicKey,
		/** Optional human readable name for this key */
		public ?string $name = null,
	) {
	}
}
