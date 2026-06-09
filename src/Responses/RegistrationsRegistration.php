<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A WARP configuration tied to a single user. Multiple registrations can be created from a single WARP device.
 */
readonly class RegistrationsRegistration
{
	public function __construct(
		/** The RFC3339 timestamp when the registration was created. */
		public string $createdAt,
		/** Device details embedded inside of a registration. */
		public RegistrationsRegistrationDevice $device,
		/** The ID of the registration. */
		public string $id,
		/** The public key used to connect to the Cloudflare network. */
		public string $key,
		/** The RFC3339 timestamp when the registration was last seen. */
		public string $lastSeenAt,
		/** The RFC3339 timestamp when the registration was last updated. */
		public string $updatedAt,
		/** The RFC3339 timestamp when the registration was deleted. */
		public ?string $deletedAt = null,
		/** The type of encryption key used by the WARP client for the active key. Currently 'curve25519' for WireGuard and 'secp256r1' for MASQUE. */
		public ?string $keyType = null,
		/** The device settings profile assigned to this registration. */
		public ?RegistrationsRegistrationPolicy $policy = null,
		/** The RFC3339 timestamp when the registration was revoked. */
		public ?string $revokedAt = null,
		/** Type of the tunnel - wireguard or masque. */
		public ?string $tunnelType = null,
		public ?RegistrationsRegistrationUser $user = null,
	) {
	}
}
