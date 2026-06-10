<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class UserAPITokensResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List Tokens
	 */
	public function list(
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\UserAPITokensDirection $direction = null,
	): mixed
	{
		return $this->client->get('/user/tokens', \FoundryCo\Cloudflare\Responses\UserApiTokensListTokens::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create Token
	 */
	public function create(\FoundryCo\Cloudflare\Requests\UserApiTokensCreateTokenRequest $request): mixed
	{
		return $this->client->post('/user/tokens', \FoundryCo\Cloudflare\Responses\UserApiTokensCreateToken::class, $request);
	}


	/**
	 * List Token Permission Groups
	 */
	public function permissionGroups(?string $name = null, ?string $scope = null): mixed
	{
		return $this->client->get('/user/tokens/permission_groups', \FoundryCo\Cloudflare\Responses\PermissionGroupsListPermissionGroups::class, ['name' => $name ?? null, 'scope' => $scope ?? null]);
	}


	/**
	 * Verify Token
	 */
	public function verify(): mixed
	{
		return $this->client->get('/user/tokens/verify', \FoundryCo\Cloudflare\Responses\UserApiTokensVerifyToken::class, []);
	}


	/**
	 * Token Details
	 */
	public function get(string $tokenId): mixed
	{
		return $this->client->get('/user/tokens/' . $tokenId, \FoundryCo\Cloudflare\Responses\UserApiTokensTokenDetails::class, []);
	}


	/**
	 * Update Token
	 */
	public function update(
		string $tokenId,
		\FoundryCo\Cloudflare\Requests\UserApiTokensUpdateTokenRequest $request,
	): mixed
	{
		return $this->client->put('/user/tokens/' . $tokenId, \FoundryCo\Cloudflare\Responses\UserApiTokensUpdateToken::class, $request);
	}


	/**
	 * Delete Token
	 */
	public function delete(string $tokenId): void
	{
		$this->client->delete('/user/tokens/' . $tokenId);
	}


	/**
	 * Roll Token
	 */
	public function value(string $tokenId): mixed
	{
		return $this->client->put('/user/tokens/' . $tokenId . '/value', null, null);
	}
}
