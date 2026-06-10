<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DnssecListDnssecZsks
{
	public function __construct(
		public ?DnssecListDnssecZsksDNSKEY $dNSKEY = null,
		/** Storage backend where the DNSSEC key material is stored. */
		public ?\FoundryCo\Cloudflare\Enums\DnssecListDnssecZsksLocation $location = null,
		/** Internal key name for the ZSK. */
		public ?string $name = null,
		public ?DnssecListDnssecZsksSigningKey $signingKey = null,
		/** Lifecycle state tag attached to the DNSSEC key. */
		public ?\FoundryCo\Cloudflare\Enums\DnssecListDnssecZsksTag $tag = null,
	) {
	}
}
