<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Components of the zone's SOA record.
 */
readonly class DnsSettingsForAnAccountUpdateDnsSettingsZoneDefaultsSoa
{
	public function __construct(
		/** Time in seconds of being unable to query the primary server after which secondary servers should stop serving the zone. */
		public ?float $expire = null,
		/** The time to live (TTL) for negative caching of records within the zone. */
		public ?float $minTtl = null,
		/** The primary nameserver, which may be used for outbound zone transfers. If null, a Cloudflare-assigned value will be used. */
		public ?string $mname = null,
		/** Time in seconds after which secondary servers should re-check the SOA record to see if the zone has been updated. */
		public ?float $refresh = null,
		/** Time in seconds after which secondary servers should retry queries after the primary server was unresponsive. */
		public ?float $retry = null,
		/** The email address of the zone administrator, with the first label representing the local part of the email address. */
		public ?string $rname = null,
		/** The time to live (TTL) of the SOA record itself. */
		public ?float $ttl = null,
	) {
	}
}
