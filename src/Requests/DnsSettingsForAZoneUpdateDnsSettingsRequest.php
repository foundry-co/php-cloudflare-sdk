<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update DNS Settings
 */
readonly class DnsSettingsForAZoneUpdateDnsSettingsRequest
{
	public function __construct(
		/** Settings determining the nameservers through which the zone should be available. */
		public ?\FoundryCo\Cloudflare\Responses\DnsSettingsForAZoneUpdateDnsSettingsRequestNameservers $nameservers = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'nameservers' => $this->nameservers?->toArray(),
		], fn ($v) => $v !== null);
	}
}
