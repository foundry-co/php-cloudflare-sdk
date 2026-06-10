<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccessReusablePoliciesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Access reusable policies
	 */
	public function list(?int $page = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/policies', \FoundryCo\Cloudflare\Responses\AccessPoliciesListAccessReusablePolicies::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create an Access reusable policy
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\AccessPoliciesCreateAnAccessReusablePolicyRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/access/policies', \FoundryCo\Cloudflare\Responses\AccessPoliciesCreateAnAccessReusablePolicy::class, $request);
	}


	/**
	 * Get an Access reusable policy
	 */
	public function get(string $policyId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/policies/' . $policyId, \FoundryCo\Cloudflare\Responses\AccessPoliciesGetAnAccessReusablePolicy::class, []);
	}


	/**
	 * Update an Access reusable policy
	 */
	public function update(
		string $policyId,
		\FoundryCo\Cloudflare\Requests\AccessPoliciesUpdateAnAccessReusablePolicyRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/access/policies/' . $policyId, \FoundryCo\Cloudflare\Responses\AccessPoliciesUpdateAnAccessReusablePolicy::class, $request);
	}


	/**
	 * Delete an Access reusable policy
	 */
	public function delete(string $policyId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/access/policies/' . $policyId);
	}
}
