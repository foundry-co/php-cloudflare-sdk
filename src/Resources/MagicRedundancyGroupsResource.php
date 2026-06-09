<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\MagicRedundancyGroupsGroups
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/redundancy_groups', \FoundryCo\Cloudflare\Responses\MagicRedundancyGroupsGroups::class, []);
	}


	/**
	 * Create a Redundancy Group
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\MagicRedundancyGroupsCreateRedundancyGroupRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicRedundancyGroupsGroup
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/redundancy_groups', \FoundryCo\Cloudflare\Responses\MagicRedundancyGroupsGroup::class, $request);
	}


	/**
	 * Get Redundancy Group Details
	 */
	public function get(string $redundancyGroupId): \FoundryCo\Cloudflare\Responses\MagicRedundancyGroupsGroup
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/redundancy_groups/' . $redundancyGroupId, \FoundryCo\Cloudflare\Responses\MagicRedundancyGroupsGroup::class, []);
	}


	/**
	 * Update a Redundancy Group
	 */
	public function update(
		string $redundancyGroupId,
		\FoundryCo\Cloudflare\Requests\MagicRedundancyGroupsUpdateRedundancyGroupRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicRedundancyGroupsGroup
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/redundancy_groups/' . $redundancyGroupId, \FoundryCo\Cloudflare\Responses\MagicRedundancyGroupsGroup::class, $request);
	}


	/**
	 * Delete a Redundancy Group
	 */
	public function delete(string $redundancyGroupId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/redundancy_groups/' . $redundancyGroupId);
	}
}
