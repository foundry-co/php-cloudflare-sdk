<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UserSAccountMembershipsUpdateMembershipPermissions
{
	public function __construct(
		public ?UserSAccountMembershipsUpdateMembershipPermissionsAnalytics $analytics = null,
		public ?UserSAccountMembershipsUpdateMembershipPermissionsBilling $billing = null,
		public ?UserSAccountMembershipsUpdateMembershipPermissionsCachePurge $cachePurge = null,
		public ?UserSAccountMembershipsUpdateMembershipPermissionsDns $dns = null,
		public ?UserSAccountMembershipsUpdateMembershipPermissionsDnsRecords $dnsRecords = null,
		public ?UserSAccountMembershipsUpdateMembershipPermissionsLb $lb = null,
		public ?UserSAccountMembershipsUpdateMembershipPermissionsLogs $logs = null,
		public ?UserSAccountMembershipsUpdateMembershipPermissionsOrganization $organization = null,
		public ?UserSAccountMembershipsUpdateMembershipPermissionsSsl $ssl = null,
		public ?UserSAccountMembershipsUpdateMembershipPermissionsWaf $waf = null,
		public ?UserSAccountMembershipsUpdateMembershipPermissionsZoneSettings $zoneSettings = null,
		public ?UserSAccountMembershipsUpdateMembershipPermissionsZones $zones = null,
	) {
	}
}
