<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DNSFirewallDetails
{
	public function __construct(
		public array $dnsFirewallIps,
		/** Identifier. */
		public string $id,
		/** Last modification of DNS Firewall cluster */
		public \DateTimeImmutable $modifiedOn,
		/** Attack mitigation settings */
		public ?DNSFirewallDetailsAttackMitigation $attackMitigation = null,
		/** Whether to refuse to answer queries for the ANY type */
		public ?bool $deprecateAnyRequests = null,
		/** Whether to forward client IP (resolver) subnet if no EDNS Client Subnet is sent */
		public ?bool $ecsFallback = null,
		/**
		 * By default, Cloudflare attempts to cache responses for as long as
		 * indicated by the TTL received from upstream nameservers. This setting
		 * sets an upper bound on this duration. For caching purposes, higher TTLs
		 * will be decreased to the maximum value defined by this setting.
		 *
		 * This setting does not affect the TTL value in the DNS response
		 * Cloudflare returns to clients. Cloudflare will always forward the TTL
		 * value received from upstream nameservers.
		 */
		public ?float $maximumCacheTtl = null,
		/**
		 * By default, Cloudflare attempts to cache responses for as long as
		 * indicated by the TTL received from upstream nameservers. This setting
		 * sets a lower bound on this duration. For caching purposes, lower TTLs
		 * will be increased to the minimum value defined by this setting.
		 *
		 * This setting does not affect the TTL value in the DNS response
		 * Cloudflare returns to clients. Cloudflare will always forward the TTL
		 * value received from upstream nameservers.
		 *
		 * Note that, even with this setting, there is no guarantee that a
		 * response will be cached for at least the specified duration. Cached
		 * responses may be removed earlier for capacity or other operational
		 * reasons.
		 */
		public ?float $minimumCacheTtl = null,
		/** DNS Firewall cluster name */
		public ?string $name = null,
		/**
		 * This setting controls how long DNS Firewall should cache negative
		 * responses (e.g., NXDOMAIN) from the upstream servers.
		 *
		 * This setting does not affect the TTL value in the DNS response
		 * Cloudflare returns to clients. Cloudflare will always forward the TTL
		 * value received from upstream nameservers.
		 */
		public ?float $negativeCacheTtl = null,
		/** Maximum number of DNS queries per second that will be forwarded to your upstream nameservers. The limit is enforced per server, where each server receives a fraction of the configured value. The actual aggregate rate for a data center may vary depending on how many servers are present. Responses served from cache do not count toward this limit. Set to null to disable rate limiting. */
		public ?float $ratelimit = null,
		/** Number of retries for fetching DNS responses from upstream nameservers (not counting the initial attempt) */
		public ?float $retries = null,
		public ?array $upstreamIps = null,
	) {
	}
}
