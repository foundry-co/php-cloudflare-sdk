<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A FIDO2 authenticator device AAGUID entry
 */
readonly class AccessAuthenticatorDeviceAAGUIDsList
{
	public function __construct(
		/** The Authenticator Attestation GUID (AAGUID) uniquely identifying a FIDO2 authenticator model */
		public string $aaguid,
		/** The human-readable name of the FIDO2 authenticator */
		public string $name,
	) {
	}
}
