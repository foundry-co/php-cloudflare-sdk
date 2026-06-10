<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class FlagshipGetApp
{
	public function __construct(
		public ?string $createdAt = null,
		public ?string $id = null,
		public ?string $name = null,
		public ?string $updatedAt = null,
		/** Email of the actor who last modified the app, or `edge-gateway` for gateway-authenticated changes. */
		public ?string $updatedBy = null,
	) {
	}
}
