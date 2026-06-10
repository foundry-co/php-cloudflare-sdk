<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The metadata of the SCIM resource.
 */
readonly class AccessIdentityProvidersListScimGroupResourcesMeta
{
	public function __construct(
		/** The timestamp of when the SCIM resource was created. */
		public ?\DateTimeImmutable $created = null,
		/** The timestamp of when the SCIM resource was last modified. */
		public ?\DateTimeImmutable $lastModified = null,
	) {
	}
}
