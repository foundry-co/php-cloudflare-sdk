<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Replace Custom Certificate and Custom Key In Custom Hostname
 */
readonly class CustomHostnameForAZoneEditCustomCertificateCustomHostnameRequest
{
	public function __construct(
		/** If a custom uploaded certificate is used. */
		public string $customCertificate,
		/** The key for a custom uploaded certificate. */
		public string $customKey,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'custom_certificate' => $this->customCertificate,
		    'custom_key' => $this->customKey,
		], fn ($v) => $v !== null);
	}
}
