<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustSeatsUpdateAUserSeat
{
	public function __construct(
		/** True if the seat is part of Access. */
		public ?bool $accessSeat = null,
		public ?\DateTimeImmutable $createdAt = null,
		/** True if the seat is part of Gateway. */
		public ?bool $gatewaySeat = null,
		/** The unique API identifier for the Zero Trust seat. */
		public ?string $seatUid = null,
		public ?\DateTimeImmutable $updatedAt = null,
	) {
	}
}
