<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetDeviceLastSeenRegistrationPolicy
{
	public function __construct(
		/** Whether the device settings profile is the default profile for the account. */
		public ?bool $default = null,
		/** Whether the device settings profile was deleted. */
		public ?bool $deleted = null,
		/** The ID of the device settings profile. */
		public ?string $id = null,
		/** The name of the device settings profile. */
		public ?string $name = null,
		/** The RFC3339 timestamp of when the device settings profile last changed for the registration. */
		public ?string $updatedAt = null,
	) {
	}
}
