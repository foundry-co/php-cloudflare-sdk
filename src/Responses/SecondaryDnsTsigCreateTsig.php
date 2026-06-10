<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SecondaryDnsTsigCreateTsig
{
	public function __construct(
		/** TSIG algorithm. */
		public ?string $algo = null,
		public ?string $id = null,
		/** TSIG key name. */
		public ?string $name = null,
		/** TSIG secret. */
		public ?string $secret = null,
	) {
	}
}
