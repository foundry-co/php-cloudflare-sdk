<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DNSRecordsForAnAccountUsage
{
	public function __construct(
		/** Maximum number of DNS records allowed across all public zones in the account. Null if using zone-level quota. */
		public int $recordQuota,
		/** Current number of DNS records across all public zones in the account. */
		public int $recordUsage,
		/** Maximum number of DNS records allowed across all internal zones in the account. Only present if internal DNS is enabled. */
		public ?int $internalRecordQuota = null,
		/** Current number of DNS records across all internal zones in the account. Only present if internal DNS is enabled. */
		public ?int $internalRecordUsage = null,
	) {
	}
}
