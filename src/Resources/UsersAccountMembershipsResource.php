<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class UsersAccountMembershipsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List Memberships
	 */
	public function list(
		?string $accountname = null,
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\UsersAccountMembershipsOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\UsersAccountMembershipsDirection $direction = null,
		?string $name = null,
		?\FoundryCo\Cloudflare\Enums\UsersAccountMembershipsStatus $status = null,
	): mixed
	{
		return $this->client->get('/memberships', null, ['accountname' => $accountname ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null, 'name' => $name ?? null, 'status' => $status ?? null]);
	}


	/**
	 * Membership Details
	 */
	public function get(string $membershipId): mixed
	{
		return $this->client->get('/memberships/' . $membershipId, \FoundryCo\Cloudflare\Responses\UserSAccountMembershipsMembershipDetails::class, []);
	}


	/**
	 * Update Membership
	 */
	public function update(
		string $membershipId,
		\FoundryCo\Cloudflare\Requests\UserSAccountMembershipsUpdateMembershipRequest $request,
	): mixed
	{
		return $this->client->put('/memberships/' . $membershipId, \FoundryCo\Cloudflare\Responses\UserSAccountMembershipsUpdateMembership::class, $request);
	}


	/**
	 * Delete Membership
	 */
	public function delete(string $membershipId): void
	{
		$this->client->delete('/memberships/' . $membershipId);
	}
}
