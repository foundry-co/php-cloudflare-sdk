<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The root organizational unit that this zone belongs to (such as a tenant or organization).
 */
readonly class Zones0GetTenant
{
	public function __construct(
		/** Identifier */
		public ?string $id = null,
		/** The name of the Tenant account. */
		public ?string $name = null,
	) {
	}
}
