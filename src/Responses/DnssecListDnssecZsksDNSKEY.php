<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DnssecListDnssecZsksDNSKEY
{
	public function __construct(
		public ?int $algorithm = null,
		public ?int $flags = null,
		public ?DnssecListDnssecZsksDNSKEYHdr $hdr = null,
		public ?int $protocol = null,
		public ?string $publicKey = null,
	) {
	}
}
