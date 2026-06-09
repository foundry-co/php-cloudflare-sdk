<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EndpointHealthChecksUpdate
{
	public function __construct(
		/** type of check to perform */
		public \FoundryCo\Cloudflare\Enums\EndpointHealthChecksUpdateCheckType $checkType,
		/** the IP address of the host to perform checks against */
		public string $endpoint,
		/** Optional name associated with this check */
		public ?string $name = null,
		/** UUID. */
		public ?string $id = null,
	) {
	}
}
