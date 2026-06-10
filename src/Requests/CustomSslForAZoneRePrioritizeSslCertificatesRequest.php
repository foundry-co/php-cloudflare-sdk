<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Re-prioritize SSL Certificates
 */
readonly class CustomSslForAZoneRePrioritizeSslCertificatesRequest
{
	public function __construct(
		/** Array of ordered certificates. */
		public array $certificates,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'certificates' => $this->certificates,
		], fn ($v) => $v !== null);
	}
}
