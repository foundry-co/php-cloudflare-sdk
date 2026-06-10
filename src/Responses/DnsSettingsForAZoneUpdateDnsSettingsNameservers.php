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
readonly class DnsSettingsForAZoneUpdateDnsSettingsNameservers
{
	public function __construct(
		/** Nameserver type */
		public ?\FoundryCo\Cloudflare\Enums\DnsSettingsForAZoneUpdateDnsSettingsNameserversType $type = null,
		/** Configured nameserver set to be used for this zone */
		public ?int $nsSet = null,
	) {
	}
}
