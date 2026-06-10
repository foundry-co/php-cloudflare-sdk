<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update your Zero Trust organization DoH settings
 */
readonly class ZeroTrustOrganizationUpdateYourZeroTrustOrganizationDohSettingsRequest
{
	public function __construct(
		/** The duration the DoH JWT is valid for. Must be in the format `300ms` or `2h45m`. Valid time units are: ns, us (or µs), ms, s, m, h.  Note that the maximum duration for this setting is the same as the key rotation period on the account. Default expiration is 24h */
		public ?string $dohJwtDuration = null,
		/** The uuid of the service token you want to use for DoH authentication */
		public ?string $serviceTokenId = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'doh_jwt_duration' => $this->dohJwtDuration,
		    'service_token_id' => $this->serviceTokenId,
		], fn ($v) => $v !== null);
	}
}
