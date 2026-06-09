<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Revoke all Access tokens for a user
 */
readonly class ZeroTrustOrganizationRevokeAllAccessTokensForAUserRequest
{
	public function __construct(
		/** The email of the user to revoke. */
		public string $email,
		/** When set to `true`, all devices associated with the user will be revoked. */
		public ?bool $devices = null,
		/** The uuid of the user to revoke. */
		public ?string $userUid = null,
		/** When set to `true`, the user will be required to re-authenticate to WARP for all Gateway policies that enforce a WARP client session duration. When `false`, the user’s WARP session will remain active */
		public ?bool $warpSessionReauth = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'email' => $this->email,
		    'devices' => $this->devices,
		    'user_uid' => $this->userUid,
		    'warp_session_reauth' => $this->warpSessionReauth,
		], fn ($v) => $v !== null);
	}
}
