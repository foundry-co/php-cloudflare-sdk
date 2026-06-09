<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessApplicationsPoliciesUserIdentity
{
	public function __construct(
		public ?string $accountId = null,
		public ?array $deviceSessions = null,
		public ?string $email = null,
		public ?AccessApplicationsPoliciesUserIdentityGeo $geo = null,
		public ?int $iat = null,
		public ?string $id = null,
		public ?bool $isGateway = null,
		public ?bool $isWarp = null,
		public ?string $name = null,
		/** UUID. */
		public ?string $userUuid = null,
		public ?int $version = null,
	) {
	}
}
