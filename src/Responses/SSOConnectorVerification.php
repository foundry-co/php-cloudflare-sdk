<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SSOConnectorVerification
{
	public function __construct(
		/** DNS verification code. Add this entire string to the DNS TXT record of the email domain to validate ownership. */
		public ?string $code = null,
		/** The status of the verification code from the verification process. */
		public ?\FoundryCo\Cloudflare\Enums\SSOConnectorVerificationStatus $status = null,
	) {
	}
}
