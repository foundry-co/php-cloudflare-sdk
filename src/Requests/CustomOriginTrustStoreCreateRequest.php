<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Upload Custom Origin Trust Store
 */
readonly class CustomOriginTrustStoreCreateRequest
{
	public function __construct(
		/** The root CA certificate in PEM format. Only root CA certificates are accepted; intermediate and leaf certificates are not supported. */
		public string $certificate,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'certificate' => $this->certificate,
		], fn ($v) => $v !== null);
	}
}
