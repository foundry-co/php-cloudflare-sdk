<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RegistrationsRegistrationUser
{
	public function __construct(
		/** The contact email address of the user. */
		public ?string $email = null,
		/** UUID. */
		public ?string $id = null,
		/** The enrolled device user's name. */
		public ?string $name = null,
	) {
	}
}
