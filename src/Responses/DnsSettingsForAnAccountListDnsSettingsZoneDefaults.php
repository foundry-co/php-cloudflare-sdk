<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DnsSettingsForAnAccountListDnsSettingsZoneDefaults
{
	public function __construct(
		/** Whether to flatten all CNAME records in the zone. Note that, due to DNS limitations, a CNAME record at the zone apex will always be flattened. */
		public ?bool $flattenAllCnames = null,
		/** Whether to enable Foundation DNS Advanced Nameservers on the zone. */
		public ?bool $foundationDns = null,
		/** Settings for this internal zone. */
		public ?DnsSettingsForAnAccountListDnsSettingsZoneDefaultsInternalDns $internalDns = null,
		/** Whether to enable multi-provider DNS, which causes Cloudflare to activate the zone even when non-Cloudflare NS records exist, and to respect NS records at the zone apex during outbound zone transfers. */
		public ?bool $multiProvider = null,
		/** The time to live (TTL) of the zone's nameserver (NS) records. */
		public ?float $nsTtl = null,
		/** Allows a Secondary DNS zone to use (proxied) override records and CNAME flattening at the zone apex. */
		public ?bool $secondaryOverrides = null,
		/** Components of the zone's SOA record. */
		public ?DnsSettingsForAnAccountListDnsSettingsZoneDefaultsSoa $soa = null,
		/** Whether the zone mode is a regular or CDN/DNS only zone. */
		public ?\FoundryCo\Cloudflare\Enums\DnsSettingsForAnAccountListDnsSettingsZoneDefaultsZoneMode $zoneMode = null,
		/** Settings determining the nameservers through which the zone should be available. */
		public ?DnsSettingsForAnAccountListDnsSettingsZoneDefaultsNameservers $nameservers = null,
	) {
	}
}
