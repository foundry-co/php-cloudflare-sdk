<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SCIMGroupsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List SCIM Groups
	 */
	public function list(?int $startIndex = null, ?int $count = null, ?string $filter = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/scim/v2/Groups', null, ['startIndex' => $startIndex ?? null, 'count' => $count ?? null, 'filter' => $filter ?? null]);
	}


	/**
	 * Create SCIM Group
	 */
	public function create(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/scim/v2/Groups', null, null);
	}


	/**
	 * Get SCIM Group
	 */
	public function get(string $groupId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/scim/v2/Groups/' . $groupId, null, []);
	}


	/**
	 * Patch SCIM Group
	 */
	public function update(string $groupId): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/scim/v2/Groups/' . $groupId, null, null);
	}


	/**
	 * Delete SCIM Group
	 */
	public function delete(string $groupId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/scim/v2/Groups/' . $groupId);
	}
}
