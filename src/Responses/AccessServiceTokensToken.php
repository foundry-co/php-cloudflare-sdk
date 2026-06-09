<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessServiceTokensToken
{
	public function __construct(
		/** The Client ID for the service token. Access will check for this value in the `CF-Access-Client-ID` request header. */
		public ?string $clientId = null,
		/** The Client Secret for the service token. Access will check for this value in the `CF-Access-Client-Secret` request header. */
		public ?string $clientSecret = null,
		public mixed $createdAt = null,
		/** The duration for how long the service token will be valid. Must be in the format `300ms` or `2h45m`. Valid time units are: ns, us (or µs), ms, s, m, h. The default is 1 year in hours (8760h). */
		public ?string $duration = null,
		/** The ID of the service token. */
		public ?string $id = null,
		/** The name of the service token. */
		public ?string $name = null,
		public mixed $updatedAt = null,
	) {
	}
}
