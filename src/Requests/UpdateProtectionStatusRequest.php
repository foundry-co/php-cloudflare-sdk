<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update protection status.
 */
readonly class UpdateProtectionStatusRequest
{
	public function __construct(
		/** Enables or disables protection. */
		public bool $enabled,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'enabled' => $this->enabled,
		], fn ($v) => $v !== null);
	}
}
