<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessServiceTokensRefreshAServiceToken
{
	public function __construct(
		/** The Client ID for the service token. Access will check for this value in the `CF-Access-Client-ID` request header. */
		public ?string $clientId = null,
		public mixed $createdAt = null,
		/** The duration for how long the service token will be valid. Must be in the format `300ms` or `2h45m`. Valid time units are: ns, us (or µs), ms, s, m, h. The default is 1 year in hours (8760h). */
		public ?string $duration = null,
		public ?\DateTimeImmutable $expiresAt = null,
		public mixed $id = null,
		public mixed $lastSeenAt = null,
		/** The name of the service token. */
		public ?string $name = null,
		public mixed $updatedAt = null,
	) {
	}
}
