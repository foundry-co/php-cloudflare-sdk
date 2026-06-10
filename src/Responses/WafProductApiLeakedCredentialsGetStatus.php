<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Defines the overall status for Leaked Credential Checks.
 */
readonly class WafProductApiLeakedCredentialsGetStatus
{
	public function __construct(
		/** Determines whether or not Leaked Credential Checks are enabled. */
		public ?bool $enabled = null,
	) {
	}
}
