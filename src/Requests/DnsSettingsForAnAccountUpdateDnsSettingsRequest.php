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
readonly class DnsSettingsForAnAccountUpdateDnsSettingsRequest
{
	public function __construct(
		/** When enabled, forces all proxied DNS records in the account to behave as DNS-only at the edge, regardless of each record's individual proxy setting. Note that this account-level override does not modify the records themselves; it only affects how they are served at the edge. See more on [Enforce DNS-only](https://developers.cloudflare.com/dns/proxy-status/enforce-dns-only). */
		public ?bool $enforceDnsOnly = null,
		public ?\FoundryCo\Cloudflare\Responses\DnsSettingsForAnAccountUpdateDnsSettingsRequestZoneDefaults $zoneDefaults = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'enforce_dns_only' => $this->enforceDnsOnly,
		    'zone_defaults' => $this->zoneDefaults?->toArray(),
		], fn ($v) => $v !== null);
	}
}
