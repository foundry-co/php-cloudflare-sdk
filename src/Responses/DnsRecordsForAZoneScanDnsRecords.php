<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DnsRecordsForAZoneScanDnsRecords
{
	public function __construct(
		/** Number of DNS records added. */
		public ?float $recsAdded = null,
		/** Total number of DNS records parsed. */
		public ?float $totalRecordsParsed = null,
	) {
	}
}
