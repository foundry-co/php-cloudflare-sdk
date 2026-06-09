<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DNSRecordsForAZoneUsage
{
	public function __construct(
		/** Maximum number of DNS records allowed for the zone. Null if using account-level quota. */
		public int $recordQuota,
		/** Current number of DNS records in the zone. */
		public int $recordUsage,
	) {
	}
}
