<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccessGroupsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List Access groups
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\ZoneLevelAccessGroupsGroups
	{
		return $this->client->get('/zones/' . $this->zoneId . '/access/groups', \FoundryCo\Cloudflare\Responses\ZoneLevelAccessGroupsGroups::class, []);
	}


	/**
	 * Create an Access group
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\ZoneLevelAccessGroupsCreateAnAccessGroupRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZoneLevelAccessGroupsGroup
	{
		return $this->client->post('/zones/' . $this->zoneId . '/access/groups', \FoundryCo\Cloudflare\Responses\ZoneLevelAccessGroupsGroup::class, $request);
	}


	/**
	 * Get an Access group
	 */
	public function get(string $groupId): \FoundryCo\Cloudflare\Responses\ZoneLevelAccessGroupsGroup
	{
		return $this->client->get('/zones/' . $this->zoneId . '/access/groups/' . $groupId, \FoundryCo\Cloudflare\Responses\ZoneLevelAccessGroupsGroup::class, []);
	}


	/**
	 * Update an Access group
	 */
	public function update(
		string $groupId,
		\FoundryCo\Cloudflare\Requests\ZoneLevelAccessGroupsUpdateAnAccessGroupRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZoneLevelAccessGroupsGroup
	{
		return $this->client->put('/zones/' . $this->zoneId . '/access/groups/' . $groupId, \FoundryCo\Cloudflare\Responses\ZoneLevelAccessGroupsGroup::class, $request);
	}


	/**
	 * Delete an Access group
	 */
	public function delete(string $groupId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/access/groups/' . $groupId);
	}
}
