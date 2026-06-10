<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Certificate
 */
readonly class OriginCaCreateCertificateRequest
{
	public function __construct(
		/** The Certificate Signing Request (CSR). Must be newline-encoded. */
		public string $csr,
		/**
		 * Array of hostnames or wildcard names bound to the certificate.
		 * Hostnames must be fully qualified domain names (FQDNs) belonging to zones on your account (e.g., `example.com` or `sub.example.com`). Wildcards are supported only as a `*.` prefix for a single level (e.g., `*.example.com`). Double wildcards (`*.*.example.com`) and interior wildcards (`foo.*.example.com`) are not allowed. The wildcard suffix must be a multi-label domain (`*.example.com` is valid, but `*.com` is not). Unicode/IDN hostnames are accepted and automatically converted to punycode.
		 */
		public array $hostnames,
		/** Signature type desired on certificate ("origin-rsa" (rsa), "origin-ecc" (ecdsa), or "keyless-certificate" (for Keyless SSL servers). */
		public \FoundryCo\Cloudflare\Enums\OriginCaCreateCertificateRequestRequestType $requestType,
		/** The number of days for which the certificate should be valid. */
		public ?\FoundryCo\Cloudflare\Enums\OriginCaCreateCertificateRequestRequestedValidity $requestedValidity = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'csr' => $this->csr,
		    'hostnames' => $this->hostnames,
		    'request_type' => $this->requestType->value,
		    'requested_validity' => $this->requestedValidity?->value,
		], fn ($v) => $v !== null);
	}
}
