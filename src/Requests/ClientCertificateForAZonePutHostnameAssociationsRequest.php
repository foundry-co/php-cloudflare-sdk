<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Replace Hostname Associations
 */
readonly class ClientCertificateForAZonePutHostnameAssociationsRequest
{
	public function __construct(
		public ?array $hostnames = null,
		/** The UUID for a certificate that was uploaded to the mTLS Certificate Management endpoint. If no mtls_certificate_id is given, the hostnames will be associated to your active Cloudflare Managed CA. */
		public ?string $mtlsCertificateId = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'hostnames' => $this->hostnames,
		    'mtls_certificate_id' => $this->mtlsCertificateId,
		], fn ($v) => $v !== null);
	}
}
