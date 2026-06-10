<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccountMembersAddMemberRolesItemPermissions
{
	public function __construct(
		public ?AccountMembersAddMemberRolesItemPermissionsAnalytics $analytics = null,
		public ?AccountMembersAddMemberRolesItemPermissionsBilling $billing = null,
		public ?AccountMembersAddMemberRolesItemPermissionsCachePurge $cachePurge = null,
		public ?AccountMembersAddMemberRolesItemPermissionsDns $dns = null,
		public ?AccountMembersAddMemberRolesItemPermissionsDnsRecords $dnsRecords = null,
		public ?AccountMembersAddMemberRolesItemPermissionsLb $lb = null,
		public ?AccountMembersAddMemberRolesItemPermissionsLogs $logs = null,
		public ?AccountMembersAddMemberRolesItemPermissionsOrganization $organization = null,
		public ?AccountMembersAddMemberRolesItemPermissionsSsl $ssl = null,
		public ?AccountMembersAddMemberRolesItemPermissionsWaf $waf = null,
		public ?AccountMembersAddMemberRolesItemPermissionsZoneSettings $zoneSettings = null,
		public ?AccountMembersAddMemberRolesItemPermissionsZones $zones = null,
	) {
	}
}
