<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccountUserGroupMembersResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List User Group Members
	 */
	public function get(
		mixed $userGroupId,
		?float $page = null,
		?float $perPage = null,
		?string $fuzzyEmail = null,
		?\FoundryCo\Cloudflare\Enums\AccountUserGroupMembersDirection $direction = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/iam/user_groups/' . $userGroupId . '/members', \FoundryCo\Cloudflare\Responses\AccountUserGroupMemberList::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'fuzzyEmail' => $fuzzyEmail ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Add User Group Members
	 */
	public function create(mixed $userGroupId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/iam/user_groups/' . $userGroupId . '/members', \FoundryCo\Cloudflare\Responses\AccountUserGroupMemberCreate::class, null);
	}


	/**
	 * Update User Group Members
	 */
	public function update(mixed $userGroupId): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/iam/user_groups/' . $userGroupId . '/members', \FoundryCo\Cloudflare\Responses\AccountUserGroupMembersUpdate::class, null);
	}


	/**
	 * Get User Group Member
	 */
	public function members(mixed $userGroupId, mixed $memberId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/iam/user_groups/' . $userGroupId . '/members/' . $memberId, \FoundryCo\Cloudflare\Responses\AccountUserGroupMemberGet::class, []);
	}


	/**
	 * Remove User Group Member
	 */
	public function delete(mixed $userGroupId, mixed $memberId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/iam/user_groups/' . $userGroupId . '/members/' . $memberId);
	}
}
