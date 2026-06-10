<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustUsersGetUsers
{
	public function __construct(
		/** True if the user has authenticated with Cloudflare Access. */
		public ?bool $accessSeat = null,
		/** The number of active devices registered to the user. */
		public ?float $activeDeviceCount = null,
		public ?\DateTimeImmutable $createdAt = null,
		/** The email of the user. */
		public ?string $email = null,
		/** True if the user has logged into the WARP client. */
		public ?bool $gatewaySeat = null,
		/** UUID. */
		public ?string $id = null,
		/** The time at which the user last successfully logged in. */
		public ?\DateTimeImmutable $lastSuccessfulLogin = null,
		/** The name of the user. */
		public ?string $name = null,
		/** The unique API identifier for the Zero Trust seat. */
		public ?string $seatUid = null,
		/** The unique API identifier for the user. */
		public ?string $uid = null,
		public ?\DateTimeImmutable $updatedAt = null,
	) {
	}
}
