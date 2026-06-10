<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A single account custom nameserver.
 */
readonly class AccountLevelCustomNameserversListAccountCustomNameservers
{
	public function __construct(
		/** A and AAAA records associated with the nameserver. */
		public ?array $dnsRecords = null,
		/** The FQDN of the name server. */
		public ?string $nsName = null,
		/** Verification status of the nameserver. */
		public ?\FoundryCo\Cloudflare\Enums\AccountLevelCustomNameserversListAccountCustomNameserversStatus $status = null,
		/** Identifier. */
		public ?string $zoneTag = null,
		/** The number of the set that this name server belongs to. */
		public ?float $nsSet = null,
	) {
	}
}
