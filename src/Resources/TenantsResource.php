<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class TenantsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get tenant
	 */
	public function get(string $tenantId): \FoundryCo\Cloudflare\Responses\TenantsRetrieveTenant
	{
		return $this->client->get('/tenants/' . $tenantId, \FoundryCo\Cloudflare\Responses\TenantsRetrieveTenant::class, []);
	}


	/**
	 * Get tenant account types
	 */
	public function accountTypes(string $tenantId): mixed
	{
		return $this->client->get('/tenants/' . $tenantId . '/account_types', null, []);
	}


	/**
	 * List tenant accounts
	 */
	public function accounts(string $tenantId): \FoundryCo\Cloudflare\Responses\TenantsListAccounts
	{
		return $this->client->get('/tenants/' . $tenantId . '/accounts', \FoundryCo\Cloudflare\Responses\TenantsListAccounts::class, []);
	}


	/**
	 * List tenant entitlements
	 */
	public function entitlements(string $tenantId): \FoundryCo\Cloudflare\Responses\TenantsListEntitlements
	{
		return $this->client->get('/tenants/' . $tenantId . '/entitlements', \FoundryCo\Cloudflare\Responses\TenantsListEntitlements::class, []);
	}


	/**
	 * List tenant memberships
	 */
	public function memberships(string $tenantId): \FoundryCo\Cloudflare\Responses\TenantsListMemberships
	{
		return $this->client->get('/tenants/' . $tenantId . '/memberships', \FoundryCo\Cloudflare\Responses\TenantsListMemberships::class, []);
	}
}
