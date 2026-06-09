<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The device settings profile assigned to this registration.
 */
readonly class RegistrationsRegistrationsPolicy
{
	public function __construct(
		/** Whether the device settings profile is the default profile for the account. */
		public bool $default,
		/** Whether the device settings profile was deleted. */
		public bool $deleted,
		/** The ID of the device settings profile. */
		public string $id,
		/** The name of the device settings profile. */
		public string $name,
		/** The RFC3339 timestamp of when the device settings profile last changed for the registration. */
		public string $updatedAt,
	) {
	}
}
