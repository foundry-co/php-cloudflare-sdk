<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccountMembersResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Members
	 */
	public function list(
		?\FoundryCo\Cloudflare\Enums\AccountMembersOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\AccountMembersStatus $status = null,
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\AccountMembersDirection $direction = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/members', \FoundryCo\Cloudflare\Responses\AccountMembersListMembers::class, ['order' => $order ?? null, 'status' => $status ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Add Member
	 */
	public function create(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/members', \FoundryCo\Cloudflare\Responses\AccountMembersAddMember::class, null);
	}


	/**
	 * Member Details
	 */
	public function get(string $memberId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/members/' . $memberId, \FoundryCo\Cloudflare\Responses\AccountMembersMemberDetails::class, []);
	}


	/**
	 * Update Member
	 */
	public function update(string $memberId): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/members/' . $memberId, \FoundryCo\Cloudflare\Responses\AccountMembersUpdateMember::class, null);
	}


	/**
	 * Remove Member
	 */
	public function delete(string $memberId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/members/' . $memberId);
	}
}
