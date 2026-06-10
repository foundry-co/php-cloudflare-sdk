<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * mTLS configuration for the origin connection. Cannot be used with VPC Service origins; TLS must be managed on the VPC Service.
 */
readonly class UpdateHyperdriveRequestMtls
{
	public function __construct(
		/** Define CA certificate ID obtained after uploading CA cert. */
		public ?string $caCertificateId = null,
		/** Define mTLS certificate ID obtained after uploading client cert. */
		public ?string $mtlsCertificateId = null,
		/** Set SSL mode to 'require', 'verify-ca', or 'verify-full' to verify the CA. */
		public ?string $sslmode = null,
	) {
	}
}
