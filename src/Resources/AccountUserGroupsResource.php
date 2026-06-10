<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccountUserGroupsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List User Groups
	 */
	public function list(
		mixed $id = null,
		?string $name = null,
		?string $fuzzyName = null,
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\AccountUserGroupsDirection $direction = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/iam/user_groups', \FoundryCo\Cloudflare\Responses\AccountUserGroupList::class, ['id' => $id ?? null, 'name' => $name ?? null, 'fuzzyName' => $fuzzyName ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create User Group
	 */
	public function create(\FoundryCo\Cloudflare\Requests\AccountUserGroupCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/iam/user_groups', \FoundryCo\Cloudflare\Responses\AccountUserGroupCreate::class, $request);
	}


	/**
	 * User Group Details
	 */
	public function get(mixed $userGroupId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/iam/user_groups/' . $userGroupId, \FoundryCo\Cloudflare\Responses\AccountUserGroupDetails::class, []);
	}


	/**
	 * Update User Group
	 */
	public function update(
		mixed $userGroupId,
		\FoundryCo\Cloudflare\Requests\AccountUserGroupUpdateRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/iam/user_groups/' . $userGroupId, \FoundryCo\Cloudflare\Responses\AccountUserGroupUpdate::class, $request);
	}


	/**
	 * Remove User Group
	 */
	public function delete(mixed $userGroupId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/iam/user_groups/' . $userGroupId);
	}
}
