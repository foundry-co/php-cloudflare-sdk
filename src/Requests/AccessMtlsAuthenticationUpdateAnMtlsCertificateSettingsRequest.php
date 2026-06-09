<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update an mTLS certificate's hostname settings
 */
readonly class AccessMtlsAuthenticationUpdateAnMtlsCertificateSettingsRequest
{
	public function __construct(
		public array $settings,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'settings' => $this->settings,
		], fn ($v) => $v !== null);
	}
}
