<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustUsersGetActiveSession
{
	public function __construct(
		public ?string $accountId = null,
		public ?string $authStatus = null,
		public ?string $commonName = null,
		public ?array $devicePosture = null,
		public ?string $deviceId = null,
		public ?array $deviceSessions = null,
		public ?string $email = null,
		public ?ZeroTrustUsersGetActiveSessionGeo $geo = null,
		public ?float $iat = null,
		public ?ZeroTrustUsersGetActiveSessionIdp $idp = null,
		public ?string $ip = null,
		public ?bool $isGateway = null,
		public ?bool $isWarp = null,
		public ?ZeroTrustUsersGetActiveSessionMtlsAuth $mtlsAuth = null,
		public ?string $serviceTokenId = null,
		public ?bool $serviceTokenStatus = null,
		public ?string $userUuid = null,
		public ?float $version = null,
		public ?bool $isActive = null,
	) {
	}
}
