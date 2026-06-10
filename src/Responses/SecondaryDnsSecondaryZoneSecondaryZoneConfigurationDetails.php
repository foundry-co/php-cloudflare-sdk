<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SecondaryDnsSecondaryZoneSecondaryZoneConfigurationDetails
{
	public function __construct(
		/**
		 * How often should a secondary zone auto refresh regardless of DNS NOTIFY.
		 * Not applicable for primary zones.
		 */
		public ?float $autoRefreshSeconds = null,
		/** The time for a specific event. */
		public ?string $checkedTime = null,
		/** The time for a specific event. */
		public ?string $createdTime = null,
		public ?string $id = null,
		/** The time for a specific event. */
		public ?string $modifiedTime = null,
		/** Zone name. */
		public ?string $name = null,
		/** A list of peer tags. */
		public ?array $peers = null,
		/** The serial number of the SOA for the given zone. */
		public ?float $soaSerial = null,
	) {
	}
}
