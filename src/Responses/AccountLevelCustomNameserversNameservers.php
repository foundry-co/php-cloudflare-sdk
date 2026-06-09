<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A single account custom nameserver.
 */
readonly class AccountLevelCustomNameserversNameservers
{
	public function __construct(
		/** A and AAAA records associated with the nameserver. */
		public array $dnsRecords,
		/** The FQDN of the name server. */
		public string $nsName,
		/** Verification status of the nameserver. */
		public \FoundryCo\Cloudflare\Enums\AccountLevelCustomNameserversNameserversStatus $status,
		/** Identifier. */
		public string $zoneTag,
		/** The number of the set that this name server belongs to. */
		public ?float $nsSet = null,
	) {
	}
}
