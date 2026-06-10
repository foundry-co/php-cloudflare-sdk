<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UserSAccountMembershipsMembershipDetailsPermissions
{
	public function __construct(
		public ?UserSAccountMembershipsMembershipDetailsPermissionsAnalytics $analytics = null,
		public ?UserSAccountMembershipsMembershipDetailsPermissionsBilling $billing = null,
		public ?UserSAccountMembershipsMembershipDetailsPermissionsCachePurge $cachePurge = null,
		public ?UserSAccountMembershipsMembershipDetailsPermissionsDns $dns = null,
		public ?UserSAccountMembershipsMembershipDetailsPermissionsDnsRecords $dnsRecords = null,
		public ?UserSAccountMembershipsMembershipDetailsPermissionsLb $lb = null,
		public ?UserSAccountMembershipsMembershipDetailsPermissionsLogs $logs = null,
		public ?UserSAccountMembershipsMembershipDetailsPermissionsOrganization $organization = null,
		public ?UserSAccountMembershipsMembershipDetailsPermissionsSsl $ssl = null,
		public ?UserSAccountMembershipsMembershipDetailsPermissionsWaf $waf = null,
		public ?UserSAccountMembershipsMembershipDetailsPermissionsZoneSettings $zoneSettings = null,
		public ?UserSAccountMembershipsMembershipDetailsPermissionsZones $zones = null,
	) {
	}
}
