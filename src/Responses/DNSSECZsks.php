<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DNSSECZsks
{
	public function __construct(
		public ?DNSSECZsksDNSKEY $dNSKEY = null,
		/** Storage backend where the DNSSEC key material is stored. */
		public ?\FoundryCo\Cloudflare\Enums\DNSSECZsksLocation $location = null,
		/** Internal key name for the ZSK. */
		public ?string $name = null,
		public ?DNSSECZsksSigningKey $signingKey = null,
		/** Lifecycle state tag attached to the DNSSEC key. */
		public ?\FoundryCo\Cloudflare\Enums\DNSSECZsksTag $tag = null,
	) {
	}
}
