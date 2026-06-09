<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Zero Trust account configuration
 */
readonly class ZeroTrustAccountsUpdateZeroTrustAccountConfigurationRequest
{
	public function __construct(
		/** Specify account settings. */
		public ?\FoundryCo\Cloudflare\Responses\ZeroTrustAccountsUpdateZeroTrustAccountConfigurationRequestSettings $settings = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'settings' => $this->settings?->toArray(),
		], fn ($v) => $v !== null);
	}
}
