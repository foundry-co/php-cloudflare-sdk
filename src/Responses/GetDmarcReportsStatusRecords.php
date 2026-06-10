<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Live DNS records for the zone, grouped by type
 */
readonly class GetDmarcReportsStatusRecords
{
	public function __construct(
		/** BIMI TXT records */
		public ?array $bimiRecords = null,
		/** CNAME records for DKIM */
		public ?array $cnameDkimRecords = null,
		/** CNAME records at _dmarc (problematic) */
		public ?array $cnameDmarcRecords = null,
		/** CNAME records for SPF */
		public ?array $cnameSpfRecords = null,
		/** DKIM TXT records */
		public ?array $dkimRecords = null,
		/** DMARC TXT records */
		public ?array $dmarcRecords = null,
		/** SPF TXT records */
		public ?array $spfRecords = null,
	) {
	}
}
