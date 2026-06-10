<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/access/groups', \FoundryCo\Cloudflare\Responses\ZoneLevelAccessGroupsListAccessGroups::class, []);
	}


	/**
	 * Create an Access group
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\ZoneLevelAccessGroupsCreateAnAccessGroupRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/access/groups', \FoundryCo\Cloudflare\Responses\ZoneLevelAccessGroupsCreateAnAccessGroup::class, $request);
	}


	/**
	 * Get an Access group
	 */
	public function get(string $groupId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/access/groups/' . $groupId, \FoundryCo\Cloudflare\Responses\ZoneLevelAccessGroupsGetAnAccessGroup::class, []);
	}


	/**
	 * Update an Access group
	 */
	public function update(
		string $groupId,
		\FoundryCo\Cloudflare\Requests\ZoneLevelAccessGroupsUpdateAnAccessGroupRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/access/groups/' . $groupId, \FoundryCo\Cloudflare\Responses\ZoneLevelAccessGroupsUpdateAnAccessGroup::class, $request);
	}


	/**
	 * Delete an Access group
	 */
	public function delete(string $groupId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/access/groups/' . $groupId);
	}
}
