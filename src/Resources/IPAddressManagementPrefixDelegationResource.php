<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class IPAddressManagementPrefixDelegationResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Prefix Delegations
	 */
	public function get(string $prefixId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/addressing/prefixes/' . $prefixId . '/delegations', \FoundryCo\Cloudflare\Responses\IpAddressManagementPrefixDelegationListPrefixDelegations::class, []);
	}


	/**
	 * Create Prefix Delegation
	 */
	public function create(
		string $prefixId,
		\FoundryCo\Cloudflare\Requests\IpAddressManagementPrefixDelegationCreatePrefixDelegationRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/addressing/prefixes/' . $prefixId . '/delegations', \FoundryCo\Cloudflare\Responses\IpAddressManagementPrefixDelegationCreatePrefixDelegation::class, $request);
	}


	/**
	 * Delete Prefix Delegation
	 */
	public function delete(string $delegationId, string $prefixId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/addressing/prefixes/' . $prefixId . '/delegations/' . $delegationId);
	}
}
