<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	): \FoundryCo\Cloudflare\Responses\AccountsAccounts
	{
		return $this->client->get('/accounts', \FoundryCo\Cloudflare\Responses\AccountsAccounts::class, ['name' => $name ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create an account
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\AccountCreationRequest $request,
	): \FoundryCo\Cloudflare\Responses\AccountsCreation
	{
		return $this->client->post('/accounts', \FoundryCo\Cloudflare\Responses\AccountsCreation::class, $request);
	}


	/**
	 * Batch move accounts
	 */
	public function move(
		\FoundryCo\Cloudflare\Requests\AccountsBatchMoveAccountsRequest $request,
	): \FoundryCo\Cloudflare\Responses\AccountsBatchMoveAccounts
	{
		return $this->client->post('/accounts/move', \FoundryCo\Cloudflare\Responses\AccountsBatchMoveAccounts::class, $request);
	}


	/**
	 * Account Details
	 */
	public function listGet(): \FoundryCo\Cloudflare\Responses\AccountsDetails
	{
		return $this->client->get('/accounts/' . $this->accountId, \FoundryCo\Cloudflare\Responses\AccountsDetails::class, []);
	}


	/**
	 * Update Account
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\AccountsUpdateAccountRequest $request,
	): \FoundryCo\Cloudflare\Responses\AccountsAccount
	{
		return $this->client->put('/accounts/' . $this->accountId, \FoundryCo\Cloudflare\Responses\AccountsAccount::class, $request);
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
	public function accountsMoveAccounts(
		\FoundryCo\Cloudflare\Requests\AccountsMoveAccountsRequest $request,
	): \FoundryCo\Cloudflare\Responses\AccountsMoveAccounts
	{
		return $this->client->post('/accounts/' . $this->accountId . '/move', \FoundryCo\Cloudflare\Responses\AccountsMoveAccounts::class, $request);
	}


	/**
	 * List account organizations
	 */
	public function organizations(): \FoundryCo\Cloudflare\Responses\AccountsListAccountOrganizations
	{
		return $this->client->get('/accounts/' . $this->accountId . '/organizations', \FoundryCo\Cloudflare\Responses\AccountsListAccountOrganizations::class, []);
	}


	/**
	 * Get account profile
	 */
	public function profile(): \FoundryCo\Cloudflare\Responses\AccountsGetAccountProfile
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
