<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustUsersGetActiveSessionsMetadata
{
	public function __construct(
		public ?array $apps = null,
		public ?int $expires = null,
		public ?int $iat = null,
		public ?string $nonce = null,
		public ?int $ttl = null,
	) {
	}
}
