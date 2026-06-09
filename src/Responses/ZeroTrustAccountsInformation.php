<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustAccountsInformation
{
	public function __construct(
		/** Specify the gateway internal ID. */
		public ?string $gatewayTag = null,
		/** Specify the Cloudflare account ID. */
		public ?string $id = null,
		/** Specify the provider name (usually Cloudflare). */
		public ?string $providerName = null,
	) {
	}
}
