<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new App
 */
readonly class MagicAccountAppsAddAppRequest
{
	public function __construct(
		/** Display name for the app. */
		public string $name,
		/** Category of the app. */
		public string $type,
		/** FQDNs to associate with traffic decisions. */
		public ?array $hostnames = null,
		/** IPv4 CIDRs to associate with traffic decisions. (IPv6 CIDRs are currently unsupported) */
		public ?array $ipSubnets = null,
		/** IPv4 CIDRs to associate with traffic decisions. (IPv6 CIDRs are currently unsupported) */
		public ?array $sourceSubnets = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'type' => $this->type,
		    'hostnames' => $this->hostnames,
		    'ip_subnets' => $this->ipSubnets,
		    'source_subnets' => $this->sourceSubnets,
		], fn ($v) => $v !== null);
	}
}
