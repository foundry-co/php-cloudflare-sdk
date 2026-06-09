<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SecondaryDNSPeerDetails
{
	public function __construct(
		public string $id,
		/** The name of the peer. */
		public string $name,
		/** IPv4/IPv6 address of primary or secondary nameserver, depending on what zone this peer is linked to. For primary zones this IP defines the IP of the secondary nameserver Cloudflare will NOTIFY upon zone changes. For secondary zones this IP defines the IP of the primary nameserver Cloudflare will send AXFR/IXFR requests to. */
		public ?string $ip = null,
		/** Enable IXFR transfer protocol, default is AXFR. Only applicable to secondary zones. */
		public ?bool $ixfrEnable = null,
		/** DNS port of primary or secondary nameserver, depending on what zone this peer is linked to. */
		public ?float $port = null,
		/** TSIG authentication will be used for zone transfer if configured. */
		public ?string $tsigId = null,
	) {
	}
}
