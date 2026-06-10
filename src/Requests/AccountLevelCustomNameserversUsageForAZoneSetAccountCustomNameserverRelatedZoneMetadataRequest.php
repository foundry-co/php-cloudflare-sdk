<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Set Account Custom Nameserver Related Zone Metadata
 */
readonly class AccountLevelCustomNameserversUsageForAZoneSetAccountCustomNameserverRelatedZoneMetadataRequest
{
	public function __construct(
		/** Whether zone uses account-level custom nameservers. */
		public ?bool $enabled = null,
		/** The number of the name server set to assign to the zone. */
		public ?float $nsSet = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'enabled' => $this->enabled,
		    'ns_set' => $this->nsSet,
		], fn ($v) => $v !== null);
	}
}
