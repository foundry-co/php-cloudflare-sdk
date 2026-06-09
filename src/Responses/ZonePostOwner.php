<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The owner of the zone.
 */
readonly class ZonePostOwner
{
	public function __construct(
		/** Identifier */
		public ?string $id = null,
		/** Name of the owner. */
		public ?string $name = null,
		/** The type of owner. */
		public ?string $type = null,
	) {
	}
}
