<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Settings determining the nameservers through which the zone should be available.
 */
readonly class DnsSettingsForAnAccountUpdateDnsSettingsZoneDefaultsNameservers
{
	public function __construct(
		/** Nameserver type */
		public ?\FoundryCo\Cloudflare\Enums\DnsSettingsForAnAccountUpdateDnsSettingsZoneDefaultsNameserversType $type = null,
	) {
	}
}
