<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	): \FoundryCo\Cloudflare\Responses\AccountUserGroupMembersList
	{
		return $this->client->get('/accounts/' . $this->accountId . '/iam/user_groups/' . $userGroupId . '/members', \FoundryCo\Cloudflare\Responses\AccountUserGroupMembersList::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'fuzzyEmail' => $fuzzyEmail ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Add User Group Members
	 */
	public function create(mixed $userGroupId): \FoundryCo\Cloudflare\Responses\AccountUserGroupMembersCreate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/iam/user_groups/' . $userGroupId . '/members', \FoundryCo\Cloudflare\Responses\AccountUserGroupMembersCreate::class, null);
	}


	/**
	 * Update User Group Members
	 */
	public function update(mixed $userGroupId): \FoundryCo\Cloudflare\Responses\AccountUserGroupMembersUpdate
	{
		return $this->client->put('/accounts/' . $this->accountId . '/iam/user_groups/' . $userGroupId . '/members', \FoundryCo\Cloudflare\Responses\AccountUserGroupMembersUpdate::class, null);
	}


	/**
	 * Get User Group Member
	 */
	public function members(
		mixed $userGroupId,
		mixed $memberId,
	): \FoundryCo\Cloudflare\Responses\AccountUserGroupMembersGet
	{
		return $this->client->get('/accounts/' . $this->accountId . '/iam/user_groups/' . $userGroupId . '/members/' . $memberId, \FoundryCo\Cloudflare\Responses\AccountUserGroupMembersGet::class, []);
	}


	/**
	 * Remove User Group Member
	 */
	public function delete(mixed $userGroupId, mixed $memberId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/iam/user_groups/' . $userGroupId . '/members/' . $memberId);
	}
}
