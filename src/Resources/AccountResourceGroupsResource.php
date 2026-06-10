<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccountResourceGroupsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Resource Groups
	 */
	public function list(mixed $id = null, ?string $name = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/iam/resource_groups', \FoundryCo\Cloudflare\Responses\AccountResourceGroupList::class, ['id' => $id ?? null, 'name' => $name ?? null]);
	}


	/**
	 * Create Resource Group
	 */
	public function create(\FoundryCo\Cloudflare\Requests\AccountResourceGroupCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/iam/resource_groups', \FoundryCo\Cloudflare\Responses\AccountResourceGroupCreate::class, $request);
	}


	/**
	 * Resource Group Details
	 */
	public function get(mixed $resourceGroupId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/iam/resource_groups/' . $resourceGroupId, \FoundryCo\Cloudflare\Responses\AccountResourceGroupDetails::class, []);
	}


	/**
	 * Update Resource Group
	 */
	public function update(
		mixed $resourceGroupId,
		\FoundryCo\Cloudflare\Requests\AccountResourceGroupUpdateRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/iam/resource_groups/' . $resourceGroupId, \FoundryCo\Cloudflare\Responses\AccountResourceGroupUpdate::class, $request);
	}


	/**
	 * Remove Resource Group
	 */
	public function delete(mixed $resourceGroupId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/iam/resource_groups/' . $resourceGroupId);
	}
}
