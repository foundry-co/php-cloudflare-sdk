<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A FIDO2 authenticator device AAGUID entry
 */
readonly class AccessAuthenticatorDeviceAaguidsList
{
	public function __construct(
		/** The Authenticator Attestation GUID (AAGUID) uniquely identifying a FIDO2 authenticator model */
		public ?string $aaguid = null,
		/** The human-readable name of the FIDO2 authenticator */
		public ?string $name = null,
	) {
	}
}
