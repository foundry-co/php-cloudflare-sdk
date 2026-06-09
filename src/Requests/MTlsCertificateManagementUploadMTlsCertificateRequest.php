<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Upload mTLS certificate
 */
readonly class MTlsCertificateManagementUploadMTlsCertificateRequest
{
	public function __construct(
		/** Indicates whether the certificate is a CA or leaf certificate. */
		public bool $ca,
		/** The uploaded root CA certificate. */
		public string $certificates,
		/** Optional unique name for the certificate. Only used for human readability. */
		public ?string $name = null,
		/** The private key for the certificate. This field is only needed for specific use cases such as using a custom certificate with Zero Trust's block page. */
		public ?string $privateKey = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'ca' => $this->ca,
		    'certificates' => $this->certificates,
		    'name' => $this->name,
		    'private_key' => $this->privateKey,
		], fn ($v) => $v !== null);
	}
}
