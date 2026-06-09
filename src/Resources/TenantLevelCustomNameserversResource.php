<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class TenantLevelCustomNameserversResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List Tenant Custom Nameservers
	 */
	public function get(string $tenantTag): \FoundryCo\Cloudflare\Responses\TenantLevelCustomNameserversNameservers
	{
		return $this->client->get('/tenants/' . $tenantTag . '/custom_ns', \FoundryCo\Cloudflare\Responses\TenantLevelCustomNameserversNameservers::class, []);
	}


	/**
	 * Add Tenant Custom Nameserver
	 */
	public function create(
		string $tenantTag,
		\FoundryCo\Cloudflare\Requests\TenantLevelCustomNameserversAddTenantCustomNameserverRequest $request,
	): \FoundryCo\Cloudflare\Responses\TenantLevelCustomNameserversNameserver
	{
		return $this->client->post('/tenants/' . $tenantTag . '/custom_ns', \FoundryCo\Cloudflare\Responses\TenantLevelCustomNameserversNameserver::class, $request);
	}


	/**
	 * Delete Tenant Custom Nameserver
	 */
	public function delete(string $customNsId, string $tenantTag): void
	{
		$this->client->delete('/tenants/' . $tenantTag . '/custom_ns/' . $customNsId);
	}
}
