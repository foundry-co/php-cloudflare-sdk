<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Device details embedded inside of a registration.
 */
readonly class GetRegistrationDevice
{
	public function __construct(
		/** The ID of the device. */
		public ?string $id = null,
		/** The name of the device. */
		public ?string $name = null,
		/** Version of the WARP client. */
		public ?string $clientVersion = null,
	) {
	}
}
