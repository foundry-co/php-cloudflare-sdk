<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccessPoliciesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List Access policies
	 */
	public function get(string $appId): \FoundryCo\Cloudflare\Responses\ZoneLevelAccessPoliciesPolicies
	{
		return $this->client->get('/zones/' . $this->zoneId . '/access/apps/' . $appId . '/policies', \FoundryCo\Cloudflare\Responses\ZoneLevelAccessPoliciesPolicies::class, []);
	}


	/**
	 * Create an Access policy
	 */
	public function create(
		string $appId,
		\FoundryCo\Cloudflare\Requests\ZoneLevelAccessPoliciesCreateAnAccessPolicyRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZoneLevelAccessPoliciesPolicy
	{
		return $this->client->post('/zones/' . $this->zoneId . '/access/apps/' . $appId . '/policies', \FoundryCo\Cloudflare\Responses\ZoneLevelAccessPoliciesPolicy::class, $request);
	}


	/**
	 * Get an Access policy
	 */
	public function policies(
		string $policyId,
		string $appId,
	): \FoundryCo\Cloudflare\Responses\ZoneLevelAccessPoliciesPolicy
	{
		return $this->client->get('/zones/' . $this->zoneId . '/access/apps/' . $appId . '/policies/' . $policyId, \FoundryCo\Cloudflare\Responses\ZoneLevelAccessPoliciesPolicy::class, []);
	}


	/**
	 * Update an Access policy
	 */
	public function update(
		string $policyId,
		string $appId,
		\FoundryCo\Cloudflare\Requests\ZoneLevelAccessPoliciesUpdateAnAccessPolicyRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZoneLevelAccessPoliciesPolicy
	{
		return $this->client->put('/zones/' . $this->zoneId . '/access/apps/' . $appId . '/policies/' . $policyId, \FoundryCo\Cloudflare\Responses\ZoneLevelAccessPoliciesPolicy::class, $request);
	}


	/**
	 * Delete an Access policy
	 */
	public function delete(string $policyId, string $appId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/access/apps/' . $appId . '/policies/' . $policyId);
	}
}
