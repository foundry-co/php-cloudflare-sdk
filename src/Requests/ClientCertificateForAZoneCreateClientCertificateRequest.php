<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Client Certificate
 */
readonly class ClientCertificateForAZoneCreateClientCertificateRequest
{
	public function __construct(
		/** The Certificate Signing Request (CSR). Must be newline-encoded. */
		public string $csr,
		/** The number of days the Client Certificate will be valid after the issued_on date. */
		public int $validityDays,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'csr' => $this->csr,
		    'validity_days' => $this->validityDays,
		], fn ($v) => $v !== null);
	}
}
