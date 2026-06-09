<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustUsersIdentity
{
	public function __construct(
		public ?string $accountId = null,
		public ?string $authStatus = null,
		public ?string $commonName = null,
		public ?array $devicePosture = null,
		public ?string $deviceId = null,
		public ?array $deviceSessions = null,
		public ?string $email = null,
		public ?ZeroTrustUsersIdentityGeo $geo = null,
		public ?float $iat = null,
		public ?ZeroTrustUsersIdentityIdp $idp = null,
		public ?string $ip = null,
		public ?bool $isGateway = null,
		public ?bool $isWarp = null,
		public ?ZeroTrustUsersIdentityMtlsAuth $mtlsAuth = null,
		public ?string $serviceTokenId = null,
		public ?bool $serviceTokenStatus = null,
		public ?string $userUuid = null,
		public ?float $version = null,
	) {
	}
}
