<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccountMembersMemberDetailsRolesItemPermissions
{
	public function __construct(
		public ?AccountMembersMemberDetailsRolesItemPermissionsAnalytics $analytics = null,
		public ?AccountMembersMemberDetailsRolesItemPermissionsBilling $billing = null,
		public ?AccountMembersMemberDetailsRolesItemPermissionsCachePurge $cachePurge = null,
		public ?AccountMembersMemberDetailsRolesItemPermissionsDns $dns = null,
		public ?AccountMembersMemberDetailsRolesItemPermissionsDnsRecords $dnsRecords = null,
		public ?AccountMembersMemberDetailsRolesItemPermissionsLb $lb = null,
		public ?AccountMembersMemberDetailsRolesItemPermissionsLogs $logs = null,
		public ?AccountMembersMemberDetailsRolesItemPermissionsOrganization $organization = null,
		public ?AccountMembersMemberDetailsRolesItemPermissionsSsl $ssl = null,
		public ?AccountMembersMemberDetailsRolesItemPermissionsWaf $waf = null,
		public ?AccountMembersMemberDetailsRolesItemPermissionsZoneSettings $zoneSettings = null,
		public ?AccountMembersMemberDetailsRolesItemPermissionsZones $zones = null,
	) {
	}
}
