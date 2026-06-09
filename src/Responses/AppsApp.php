<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AppsApp
{
	public function __construct(
		public string $createdAt,
		public string $id,
		public string $name,
		public string $updatedAt,
		/** Email of the actor who last modified the app, or `edge-gateway` for gateway-authenticated changes. */
		public string $updatedBy,
	) {
	}
}
