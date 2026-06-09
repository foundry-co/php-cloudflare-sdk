<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	): \FoundryCo\Cloudflare\Responses\AccountUserGroupsList
	{
		return $this->client->get('/accounts/' . $this->accountId . '/iam/user_groups', \FoundryCo\Cloudflare\Responses\AccountUserGroupsList::class, ['id' => $id ?? null, 'name' => $name ?? null, 'fuzzyName' => $fuzzyName ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create User Group
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\AccountUserGroupCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\AccountUserGroupsCreate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/iam/user_groups', \FoundryCo\Cloudflare\Responses\AccountUserGroupsCreate::class, $request);
	}


	/**
	 * User Group Details
	 */
	public function get(mixed $userGroupId): \FoundryCo\Cloudflare\Responses\AccountUserGroupsDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/iam/user_groups/' . $userGroupId, \FoundryCo\Cloudflare\Responses\AccountUserGroupsDetails::class, []);
	}


	/**
	 * Update User Group
	 */
	public function update(
		mixed $userGroupId,
		\FoundryCo\Cloudflare\Requests\AccountUserGroupUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\AccountUserGroupsUpdate
	{
		return $this->client->put('/accounts/' . $this->accountId . '/iam/user_groups/' . $userGroupId, \FoundryCo\Cloudflare\Responses\AccountUserGroupsUpdate::class, $request);
	}


	/**
	 * Remove User Group
	 */
	public function delete(mixed $userGroupId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/iam/user_groups/' . $userGroupId);
	}
}
