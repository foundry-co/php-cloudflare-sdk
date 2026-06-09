<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	): \FoundryCo\Cloudflare\Responses\UserAPITokensTokens
	{
		return $this->client->get('/user/tokens', \FoundryCo\Cloudflare\Responses\UserAPITokensTokens::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create Token
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\UserApiTokensCreateTokenRequest $request,
	): \FoundryCo\Cloudflare\Responses\UserAPITokensToken
	{
		return $this->client->post('/user/tokens', \FoundryCo\Cloudflare\Responses\UserAPITokensToken::class, $request);
	}


	/**
	 * List Token Permission Groups
	 */
	public function permissionGroups(
		?string $name = null,
		?string $scope = null,
	): \FoundryCo\Cloudflare\Responses\UserAPITokensGroups
	{
		return $this->client->get('/user/tokens/permission_groups', \FoundryCo\Cloudflare\Responses\UserAPITokensGroups::class, ['name' => $name ?? null, 'scope' => $scope ?? null]);
	}


	/**
	 * Verify Token
	 */
	public function verify(): \FoundryCo\Cloudflare\Responses\UserAPITokensToken
	{
		return $this->client->get('/user/tokens/verify', \FoundryCo\Cloudflare\Responses\UserAPITokensToken::class, []);
	}


	/**
	 * Token Details
	 */
	public function get(string $tokenId): \FoundryCo\Cloudflare\Responses\UserAPITokensDetails
	{
		return $this->client->get('/user/tokens/' . $tokenId, \FoundryCo\Cloudflare\Responses\UserAPITokensDetails::class, []);
	}


	/**
	 * Update Token
	 */
	public function update(
		string $tokenId,
		\FoundryCo\Cloudflare\Requests\UserApiTokensUpdateTokenRequest $request,
	): \FoundryCo\Cloudflare\Responses\UserAPITokensToken
	{
		return $this->client->put('/user/tokens/' . $tokenId, \FoundryCo\Cloudflare\Responses\UserAPITokensToken::class, $request);
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
