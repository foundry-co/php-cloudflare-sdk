<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Components of a CAA record.
 */
readonly class DnsRecordsForAZonePatchDnsRecordData
{
	public function __construct(
		/** Flags for the CAA record. */
		public ?float $flags = null,
		/** Name of the property controlled by this record (e.g.: issue, issuewild, iodef). */
		public ?string $tag = null,
		/** Value of the record. This field's semantics depend on the chosen tag. */
		public ?string $value = null,
	) {
	}
}
