<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Add Tenant Custom Nameserver
 */
readonly class TenantLevelCustomNameserversAddTenantCustomNameserverRequest
{
	public function __construct(
		/** The FQDN of the name server. */
		public string $nsName,
		/** The number of the set that this name server belongs to. */
		public ?float $nsSet = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'ns_name' => $this->nsName,
		    'ns_set' => $this->nsSet,
		], fn ($v) => $v !== null);
	}
}
