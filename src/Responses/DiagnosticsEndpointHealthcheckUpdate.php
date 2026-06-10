<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DiagnosticsEndpointHealthcheckUpdate
{
	public function __construct(
		/** type of check to perform */
		public ?\FoundryCo\Cloudflare\Enums\DiagnosticsEndpointHealthcheckUpdateCheckType $checkType = null,
		/** the IP address of the host to perform checks against */
		public ?string $endpoint = null,
		/** Optional name associated with this check */
		public ?string $name = null,
		/** UUID. */
		public ?string $id = null,
	) {
	}
}
