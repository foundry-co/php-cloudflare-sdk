<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Edit SSL Certificate Pack Validation Method
 */
readonly class SslVerificationEditSslCertificatePackValidationMethodRequest
{
	public function __construct(
		/** Desired validation method. */
		public \FoundryCo\Cloudflare\Enums\SslVerificationEditSslCertificatePackValidationMethodRequestValidationMethod $validationMethod,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'validation_method' => $this->validationMethod->value,
		], fn ($v) => $v !== null);
	}
}
