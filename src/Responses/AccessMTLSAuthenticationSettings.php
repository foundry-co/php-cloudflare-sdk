<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessMTLSAuthenticationSettings
{
	public function __construct(
		/** Request client certificates for this hostname in China. Can only be set to true if this zone is china network enabled. */
		public bool $chinaNetwork,
		/** Client Certificate Forwarding is a feature that takes the client cert provided by the eyeball to the edge, and forwards it to the origin as a HTTP header to allow logging on the origin. */
		public bool $clientCertificateForwarding,
		/** The hostname that these settings apply to. */
		public string $hostname,
	) {
	}
}
