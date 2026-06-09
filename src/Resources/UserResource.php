<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\UserDetails
	{
		return $this->client->get('/user', \FoundryCo\Cloudflare\Responses\UserDetails::class, []);
	}


	/**
	 * Edit User
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\UserEditUserRequest $request,
	): \FoundryCo\Cloudflare\Responses\UserUser
	{
		return $this->client->patch('/user', \FoundryCo\Cloudflare\Responses\UserUser::class, $request);
	}


	/**
	 * List user tenants
	 */
	public function tenants(): \FoundryCo\Cloudflare\Responses\UserListUserTenants
	{
		return $this->client->get('/user/tenants', \FoundryCo\Cloudflare\Responses\UserListUserTenants::class, []);
	}
}
