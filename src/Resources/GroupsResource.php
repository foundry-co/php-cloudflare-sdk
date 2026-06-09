<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class GroupsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List groups for an account
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/-/groups', null, []);
	}


	/**
	 * Create a group
	 */
	public function create(\FoundryCo\Cloudflare\Requests\PostGroupCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/-/groups', null, $request);
	}


	/**
	 * Read a group for an account
	 */
	public function get(string $groupId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/-/groups/' . $groupId, null, []);
	}


	/**
	 * Update a group
	 */
	public function update(string $groupId, \FoundryCo\Cloudflare\Requests\PutGroupUpdateRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/-/groups/' . $groupId, null, $request);
	}


	/**
	 * Delete a group for an account
	 */
	public function delete(string $groupId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/-/groups/' . $groupId);
	}


	/**
	 * List group members
	 */
	public function members(string $groupId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/-/groups/' . $groupId . '/members', null, []);
	}


	/**
	 * Create a group member
	 */
	public function postGroupMemberCreate(
		string $groupId,
		\FoundryCo\Cloudflare\Requests\PostGroupMemberCreateRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/-/groups/' . $groupId . '/members', null, $request);
	}


	/**
	 * Delete a group member
	 */
	public function deleteGroupMemberDelete(string $groupId, string $memberId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/-/groups/' . $groupId . '/members/' . $memberId);
	}
}
