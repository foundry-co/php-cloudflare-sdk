<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SCIMUsersResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List SCIM Users
	 */
	public function list(?int $startIndex = null, ?int $count = null, ?string $filter = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/scim/v2/Users', null, ['startIndex' => $startIndex ?? null, 'count' => $count ?? null, 'filter' => $filter ?? null]);
	}


	/**
	 * Create SCIM User
	 */
	public function create(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/scim/v2/Users', null, null);
	}


	/**
	 * Get SCIM User
	 */
	public function get(string $userId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/scim/v2/Users/' . $userId, null, []);
	}


	/**
	 * Replace SCIM User
	 */
	public function update(string $userId): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/scim/v2/Users/' . $userId, null, null);
	}


	/**
	 * Patch SCIM User
	 */
	public function users(string $userId): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/scim/v2/Users/' . $userId, null, null);
	}
}
