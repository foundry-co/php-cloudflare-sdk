<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TenantLevelCustomNameserversNameserversDnsRecordsItem
{
	public function __construct(
		/** DNS record type. */
		public ?\FoundryCo\Cloudflare\Enums\TenantLevelCustomNameserversNameserversDnsRecordsItemType $type = null,
		/** DNS record contents (an IPv4 or IPv6 address). */
		public ?string $value = null,
	) {
	}
}
