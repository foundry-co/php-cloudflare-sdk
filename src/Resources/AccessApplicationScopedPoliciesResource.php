<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccessApplicationScopedPoliciesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Access application policies
	 */
	public function get(string $appId, ?int $page = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/apps/' . $appId . '/policies', \FoundryCo\Cloudflare\Responses\AccessPoliciesListAccessAppPolicies::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create an Access application policy
	 */
	public function create(
		string $appId,
		\FoundryCo\Cloudflare\Requests\AccessPoliciesCreateAnAccessPolicyRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/access/apps/' . $appId . '/policies', \FoundryCo\Cloudflare\Responses\AccessPoliciesCreateAnAccessPolicy::class, $request);
	}


	/**
	 * Get an Access application policy
	 */
	public function policies(string $appId, string $policyId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/apps/' . $appId . '/policies/' . $policyId, \FoundryCo\Cloudflare\Responses\AccessPoliciesGetAnAccessPolicy::class, []);
	}


	/**
	 * Update an Access application policy
	 */
	public function update(
		string $appId,
		string $policyId,
		\FoundryCo\Cloudflare\Requests\AccessPoliciesUpdateAnAccessPolicyRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/access/apps/' . $appId . '/policies/' . $policyId, \FoundryCo\Cloudflare\Responses\AccessPoliciesUpdateAnAccessPolicy::class, $request);
	}


	/**
	 * Delete an Access application policy
	 */
	public function delete(string $appId, string $policyId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/access/apps/' . $appId . '/policies/' . $policyId);
	}


	/**
	 * Convert an Access application policy to a reusable policy
	 */
	public function makeReusable(string $appId, string $policyId): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/access/apps/' . $appId . '/policies/' . $policyId . '/make_reusable', \FoundryCo\Cloudflare\Responses\AccessPoliciesConvertReusable::class, null);
	}
}
