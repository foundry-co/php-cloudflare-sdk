<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccountMembersListMembersRolesItemPermissions
{
	public function __construct(
		public ?AccountMembersListMembersRolesItemPermissionsAnalytics $analytics = null,
		public ?AccountMembersListMembersRolesItemPermissionsBilling $billing = null,
		public ?AccountMembersListMembersRolesItemPermissionsCachePurge $cachePurge = null,
		public ?AccountMembersListMembersRolesItemPermissionsDns $dns = null,
		public ?AccountMembersListMembersRolesItemPermissionsDnsRecords $dnsRecords = null,
		public ?AccountMembersListMembersRolesItemPermissionsLb $lb = null,
		public ?AccountMembersListMembersRolesItemPermissionsLogs $logs = null,
		public ?AccountMembersListMembersRolesItemPermissionsOrganization $organization = null,
		public ?AccountMembersListMembersRolesItemPermissionsSsl $ssl = null,
		public ?AccountMembersListMembersRolesItemPermissionsWaf $waf = null,
		public ?AccountMembersListMembersRolesItemPermissionsZoneSettings $zoneSettings = null,
		public ?AccountMembersListMembersRolesItemPermissionsZones $zones = null,
	) {
	}
}
