<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccountRolesRoleDetailsPermissions
{
	public function __construct(
		public ?AccountRolesRoleDetailsPermissionsAnalytics $analytics = null,
		public ?AccountRolesRoleDetailsPermissionsBilling $billing = null,
		public ?AccountRolesRoleDetailsPermissionsCachePurge $cachePurge = null,
		public ?AccountRolesRoleDetailsPermissionsDns $dns = null,
		public ?AccountRolesRoleDetailsPermissionsDnsRecords $dnsRecords = null,
		public ?AccountRolesRoleDetailsPermissionsLb $lb = null,
		public ?AccountRolesRoleDetailsPermissionsLogs $logs = null,
		public ?AccountRolesRoleDetailsPermissionsOrganization $organization = null,
		public ?AccountRolesRoleDetailsPermissionsSsl $ssl = null,
		public ?AccountRolesRoleDetailsPermissionsWaf $waf = null,
		public ?AccountRolesRoleDetailsPermissionsZoneSettings $zoneSettings = null,
		public ?AccountRolesRoleDetailsPermissionsZones $zones = null,
	) {
	}
}
