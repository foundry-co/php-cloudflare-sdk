<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustUsersSessionsMetadata
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
