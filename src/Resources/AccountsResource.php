<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccountsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List Accounts
	 */
	public function list(
		?string $name = null,
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\AccountsDirection $direction = null,
	): mixed
	{
		return $this->client->get('/accounts', \FoundryCo\Cloudflare\Responses\AccountsListAccounts::class, ['name' => $name ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create an account
	 */
	public function create(\FoundryCo\Cloudflare\Requests\AccountCreationRequest $request): mixed
	{
		return $this->client->post('/accounts', \FoundryCo\Cloudflare\Responses\AccountCreation::class, $request);
	}


	/**
	 * Batch move accounts
	 */
	public function move(\FoundryCo\Cloudflare\Requests\AccountsBatchMoveAccountsRequest $request): mixed
	{
		return $this->client->post('/accounts/move', \FoundryCo\Cloudflare\Responses\AccountsBatchMoveAccounts::class, $request);
	}


	/**
	 * Account Details
	 */
	public function listGet(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId, \FoundryCo\Cloudflare\Responses\AccountsAccountDetails::class, []);
	}


	/**
	 * Update Account
	 */
	public function update(\FoundryCo\Cloudflare\Requests\AccountsUpdateAccountRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId, \FoundryCo\Cloudflare\Responses\AccountsUpdateAccount::class, $request);
	}


	/**
	 * Delete a specific account
	 */
	public function delete(): void
	{
		$this->client->delete('/accounts/' . $this->accountId);
	}


	/**
	 * Move account
	 */
	public function accountsMoveAccounts(\FoundryCo\Cloudflare\Requests\AccountsMoveAccountsRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/move', \FoundryCo\Cloudflare\Responses\AccountsMoveAccounts::class, $request);
	}


	/**
	 * List account organizations
	 */
	public function organizations(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/organizations', \FoundryCo\Cloudflare\Responses\AccountsListAccountOrganizations::class, []);
	}


	/**
	 * Get account profile
	 */
	public function profile(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/profile', \FoundryCo\Cloudflare\Responses\AccountsGetAccountProfile::class, []);
	}


	/**
	 * Modify account profile
	 */
	public function accountsModifyAccountProfile(
		\FoundryCo\Cloudflare\Requests\AccountsModifyAccountProfileRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/profile', null, $request);
	}
}
