<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ListDevicesLastSeenRegistration
{
	public function __construct(
		/** A summary of the device profile evaluated for the registration. */
		public ?ListDevicesLastSeenRegistrationPolicy $policy = null,
	) {
	}
}
