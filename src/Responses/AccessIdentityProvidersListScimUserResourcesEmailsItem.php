<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessIdentityProvidersListScimUserResourcesEmailsItem
{
	public function __construct(
		/** Indicates if the email address is the primary email belonging to the SCIM User resource. */
		public ?bool $primary = null,
		/** Indicates the type of the email address. */
		public ?string $type = null,
		/** The email address of the SCIM User resource. */
		public ?string $value = null,
	) {
	}
}
