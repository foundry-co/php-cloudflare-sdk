<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	): \FoundryCo\Cloudflare\Responses\AccountOwnedAPITokensTokens
	{
		return $this->client->get('/accounts/' . $this->accountId . '/tokens', \FoundryCo\Cloudflare\Responses\AccountOwnedAPITokensTokens::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create Token
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\AccountApiTokensCreateTokenRequest $request,
	): \FoundryCo\Cloudflare\Responses\AccountOwnedAPITokensToken
	{
		return $this->client->post('/accounts/' . $this->accountId . '/tokens', \FoundryCo\Cloudflare\Responses\AccountOwnedAPITokensToken::class, $request);
	}


	/**
	 * List Permission Groups
	 */
	public function permissionGroups(
		?string $name = null,
		?string $scope = null,
	): \FoundryCo\Cloudflare\Responses\AccountOwnedAPITokensGroups
	{
		return $this->client->get('/accounts/' . $this->accountId . '/tokens/permission_groups', \FoundryCo\Cloudflare\Responses\AccountOwnedAPITokensGroups::class, ['name' => $name ?? null, 'scope' => $scope ?? null]);
	}


	/**
	 * Verify Token
	 */
	public function verify(): \FoundryCo\Cloudflare\Responses\AccountOwnedAPITokensToken
	{
		return $this->client->get('/accounts/' . $this->accountId . '/tokens/verify', \FoundryCo\Cloudflare\Responses\AccountOwnedAPITokensToken::class, []);
	}


	/**
	 * Token Details
	 */
	public function get(string $tokenId): \FoundryCo\Cloudflare\Responses\AccountOwnedAPITokensDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/tokens/' . $tokenId, \FoundryCo\Cloudflare\Responses\AccountOwnedAPITokensDetails::class, []);
	}


	/**
	 * Update Token
	 */
	public function update(
		string $tokenId,
		\FoundryCo\Cloudflare\Requests\AccountApiTokensUpdateTokenRequest $request,
	): \FoundryCo\Cloudflare\Responses\AccountOwnedAPITokensToken
	{
		return $this->client->put('/accounts/' . $this->accountId . '/tokens/' . $tokenId, \FoundryCo\Cloudflare\Responses\AccountOwnedAPITokensToken::class, $request);
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
