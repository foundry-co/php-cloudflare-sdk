<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccountRolesListRolesPermissions
{
	public function __construct(
		public ?AccountRolesListRolesPermissionsAnalytics $analytics = null,
		public ?AccountRolesListRolesPermissionsBilling $billing = null,
		public ?AccountRolesListRolesPermissionsCachePurge $cachePurge = null,
		public ?AccountRolesListRolesPermissionsDns $dns = null,
		public ?AccountRolesListRolesPermissionsDnsRecords $dnsRecords = null,
		public ?AccountRolesListRolesPermissionsLb $lb = null,
		public ?AccountRolesListRolesPermissionsLogs $logs = null,
		public ?AccountRolesListRolesPermissionsOrganization $organization = null,
		public ?AccountRolesListRolesPermissionsSsl $ssl = null,
		public ?AccountRolesListRolesPermissionsWaf $waf = null,
		public ?AccountRolesListRolesPermissionsZoneSettings $zoneSettings = null,
		public ?AccountRolesListRolesPermissionsZones $zones = null,
	) {
	}
}
