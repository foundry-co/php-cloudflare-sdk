<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update an App
 */
readonly class MagicAccountAppsUpdateAppRequest
{
	public function __construct(
		/** FQDNs to associate with traffic decisions. */
		public ?array $hostnames = null,
		/** IPv4 CIDRs to associate with traffic decisions. (IPv6 CIDRs are currently unsupported) */
		public ?array $ipSubnets = null,
		/** Display name for the app. */
		public ?string $name = null,
		/** IPv4 CIDRs to associate with traffic decisions. (IPv6 CIDRs are currently unsupported) */
		public ?array $sourceSubnets = null,
		/** Category of the app. */
		public ?string $type = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'hostnames' => $this->hostnames,
		    'ip_subnets' => $this->ipSubnets,
		    'name' => $this->name,
		    'source_subnets' => $this->sourceSubnets,
		    'type' => $this->type,
		], fn ($v) => $v !== null);
	}
}
