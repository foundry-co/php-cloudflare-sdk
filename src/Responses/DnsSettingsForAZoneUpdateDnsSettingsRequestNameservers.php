<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Settings determining the nameservers through which the zone should be available.
 */
readonly class DnsSettingsForAZoneUpdateDnsSettingsRequestNameservers
{
	public function __construct(
		/** Configured nameserver set to be used for this zone */
		public ?int $nsSet = null,
		/** Nameserver type */
		public ?\FoundryCo\Cloudflare\Enums\DnsSettingsForAZoneUpdateDnsSettingsRequestNameserversType $type = null,
	) {
	}
}
