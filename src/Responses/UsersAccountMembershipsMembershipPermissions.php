<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UsersAccountMembershipsMembershipPermissions
{
	public function __construct(
		public ?array $analytics = null,
		public ?array $billing = null,
		public ?array $cachePurge = null,
		public ?array $dns = null,
		public ?array $dnsRecords = null,
		public ?array $lb = null,
		public ?array $logs = null,
		public ?array $organization = null,
		public ?array $ssl = null,
		public ?array $waf = null,
		public ?array $zoneSettings = null,
		public ?array $zones = null,
	) {
	}
}
