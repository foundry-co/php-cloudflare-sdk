<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class UserResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * User Details
	 */
	public function list(): mixed
	{
		return $this->client->get('/user', \FoundryCo\Cloudflare\Responses\UserUserDetails::class, []);
	}


	/**
	 * Edit User
	 */
	public function update(\FoundryCo\Cloudflare\Requests\UserEditUserRequest $request): mixed
	{
		return $this->client->patch('/user', \FoundryCo\Cloudflare\Responses\UserEditUser::class, $request);
	}


	/**
	 * List user tenants
	 */
	public function tenants(): mixed
	{
		return $this->client->get('/user/tenants', \FoundryCo\Cloudflare\Responses\UserListUserTenants::class, []);
	}
}
