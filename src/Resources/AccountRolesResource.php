<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccountRolesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Roles
	 */
	public function list(?float $page = null, ?float $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/roles', \FoundryCo\Cloudflare\Responses\AccountRolesListRoles::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Role Details
	 */
	public function get(string $roleId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/roles/' . $roleId, \FoundryCo\Cloudflare\Responses\AccountRolesRoleDetails::class, []);
	}
}
