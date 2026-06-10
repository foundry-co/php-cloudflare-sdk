<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccountOwnedAPITokensResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Tokens
	 */
	public function list(
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\AccountOwnedAPITokensDirection $direction = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/tokens', \FoundryCo\Cloudflare\Responses\AccountApiTokensListTokens::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create Token
	 */
	public function create(\FoundryCo\Cloudflare\Requests\AccountApiTokensCreateTokenRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/tokens', \FoundryCo\Cloudflare\Responses\AccountApiTokensCreateToken::class, $request);
	}


	/**
	 * List Permission Groups
	 */
	public function permissionGroups(?string $name = null, ?string $scope = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/tokens/permission_groups', \FoundryCo\Cloudflare\Responses\AccountApiTokensListPermissionGroups::class, ['name' => $name ?? null, 'scope' => $scope ?? null]);
	}


	/**
	 * Verify Token
	 */
	public function verify(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/tokens/verify', \FoundryCo\Cloudflare\Responses\AccountApiTokensVerifyToken::class, []);
	}


	/**
	 * Token Details
	 */
	public function get(string $tokenId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/tokens/' . $tokenId, \FoundryCo\Cloudflare\Responses\AccountApiTokensTokenDetails::class, []);
	}


	/**
	 * Update Token
	 */
	public function update(
		string $tokenId,
		\FoundryCo\Cloudflare\Requests\AccountApiTokensUpdateTokenRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/tokens/' . $tokenId, \FoundryCo\Cloudflare\Responses\AccountApiTokensUpdateToken::class, $request);
	}


	/**
	 * Delete Token
	 */
	public function delete(string $tokenId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/tokens/' . $tokenId);
	}


	/**
	 * Roll Token
	 */
	public function value(string $tokenId): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/tokens/' . $tokenId . '/value', null, null);
	}
}
