<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Device details embedded inside of a registration.
 */
readonly class RegistrationsRegistrationsDevice
{
	public function __construct(
		/** The ID of the device. */
		public string $id,
		/** The name of the device. */
		public string $name,
		/** Version of the WARP client. */
		public ?string $clientVersion = null,
	) {
	}
}
