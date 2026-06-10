<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * SSH public key provided by the user
 */
readonly class ListApplicationVersionsConfigurationAuthorizedKeysItem
{
	public function __construct(
		/** An SSH public key */
		public ?string $publicKey = null,
		/** Optional human readable name for this key */
		public ?string $name = null,
	) {
	}
}
