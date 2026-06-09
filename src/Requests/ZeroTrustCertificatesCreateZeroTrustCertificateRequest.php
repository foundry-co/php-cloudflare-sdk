<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Zero Trust certificate
 */
readonly class ZeroTrustCertificatesCreateZeroTrustCertificateRequest
{
	public function __construct(
		/** Sets the certificate validity period in days (range: 1-10,950 days / ~30 years). Defaults to 1,825 days (5 years). **Important**: This field is only settable during the certificate creation.  Certificates becomes immutable after creation - use the `/activate` and `/deactivate` endpoints to manage certificate lifecycle. */
		public ?int $validityPeriodDays = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'validity_period_days' => $this->validityPeriodDays,
		], fn ($v) => $v !== null);
	}
}
