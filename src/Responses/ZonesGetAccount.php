<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The account the zone belongs to.
 */
readonly class ZonesGetAccount
{
	public function __construct(
		/** Identifier */
		public ?string $id = null,
		/** The name of the account. */
		public ?string $name = null,
	) {
	}
}
