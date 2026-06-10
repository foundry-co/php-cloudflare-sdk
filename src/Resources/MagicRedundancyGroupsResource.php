<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MagicRedundancyGroupsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Redundancy Groups
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/redundancy_groups', \FoundryCo\Cloudflare\Responses\MagicRedundancyGroupsListRedundancyGroups::class, []);
	}


	/**
	 * Create a Redundancy Group
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\MagicRedundancyGroupsCreateRedundancyGroupRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/redundancy_groups', \FoundryCo\Cloudflare\Responses\MagicRedundancyGroupsCreateRedundancyGroup::class, $request);
	}


	/**
	 * Get Redundancy Group Details
	 */
	public function get(string $redundancyGroupId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/redundancy_groups/' . $redundancyGroupId, \FoundryCo\Cloudflare\Responses\MagicRedundancyGroupsGetRedundancyGroup::class, []);
	}


	/**
	 * Update a Redundancy Group
	 */
	public function update(
		string $redundancyGroupId,
		\FoundryCo\Cloudflare\Requests\MagicRedundancyGroupsUpdateRedundancyGroupRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/redundancy_groups/' . $redundancyGroupId, \FoundryCo\Cloudflare\Responses\MagicRedundancyGroupsUpdateRedundancyGroup::class, $request);
	}


	/**
	 * Delete a Redundancy Group
	 */
	public function delete(string $redundancyGroupId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/redundancy_groups/' . $redundancyGroupId);
	}
}
