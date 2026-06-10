<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccountMembersUpdateMemberRolesItemPermissions
{
	public function __construct(
		public ?AccountMembersUpdateMemberRolesItemPermissionsAnalytics $analytics = null,
		public ?AccountMembersUpdateMemberRolesItemPermissionsBilling $billing = null,
		public ?AccountMembersUpdateMemberRolesItemPermissionsCachePurge $cachePurge = null,
		public ?AccountMembersUpdateMemberRolesItemPermissionsDns $dns = null,
		public ?AccountMembersUpdateMemberRolesItemPermissionsDnsRecords $dnsRecords = null,
		public ?AccountMembersUpdateMemberRolesItemPermissionsLb $lb = null,
		public ?AccountMembersUpdateMemberRolesItemPermissionsLogs $logs = null,
		public ?AccountMembersUpdateMemberRolesItemPermissionsOrganization $organization = null,
		public ?AccountMembersUpdateMemberRolesItemPermissionsSsl $ssl = null,
		public ?AccountMembersUpdateMemberRolesItemPermissionsWaf $waf = null,
		public ?AccountMembersUpdateMemberRolesItemPermissionsZoneSettings $zoneSettings = null,
		public ?AccountMembersUpdateMemberRolesItemPermissionsZones $zones = null,
	) {
	}
}
