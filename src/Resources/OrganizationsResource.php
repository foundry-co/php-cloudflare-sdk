<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class OrganizationsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List organizations the user has access to
	 */
	public function list(
		?array $id = null,
		?string $name = null,
		?string $namestartsWith = null,
		?string $nameendsWith = null,
		?string $namecontains = null,
		?string $containingaccount = null,
		?string $containinguser = null,
		?string $containingorganization = null,
		mixed $parentid = null,
		?string $pageToken = null,
		?int $pageSize = null,
	): mixed
	{
		return $this->client->get('/organizations', \FoundryCo\Cloudflare\Responses\OrganizationListOrganizations::class, ['id' => $id ?? null, 'name' => $name ?? null, 'namestartsWith' => $namestartsWith ?? null, 'nameendsWith' => $nameendsWith ?? null, 'namecontains' => $namecontains ?? null, 'containingaccount' => $containingaccount ?? null, 'containinguser' => $containinguser ?? null, 'containingorganization' => $containingorganization ?? null, 'parentid' => $parentid ?? null, 'pageToken' => $pageToken ?? null, 'pageSize' => $pageSize ?? null]);
	}


	/**
	 * Create organization
	 */
	public function create(\FoundryCo\Cloudflare\Requests\OrganizationsCreateUserOrganizationRequest $request): mixed
	{
		return $this->client->post('/organizations', \FoundryCo\Cloudflare\Responses\OrganizationsCreateUserOrganization::class, $request);
	}


	/**
	 * Get organization
	 */
	public function get(string $organizationId): mixed
	{
		return $this->client->get('/organizations/' . $organizationId, \FoundryCo\Cloudflare\Responses\OrganizationsRetrieve::class, []);
	}


	/**
	 * Modify organization.
	 */
	public function update(
		string $organizationId,
		\FoundryCo\Cloudflare\Requests\OrganizationsModifyRequest $request,
	): mixed
	{
		return $this->client->put('/organizations/' . $organizationId, \FoundryCo\Cloudflare\Responses\OrganizationsModify::class, $request);
	}


	/**
	 * Delete organization.
	 */
	public function delete(string $organizationId): void
	{
		$this->client->delete('/organizations/' . $organizationId);
	}


	/**
	 * Get organization accounts
	 */
	public function accounts(
		string $organizationId,
		?string $accountPubname = null,
		?string $accountPubnamestartsWith = null,
		?string $accountPubnameendsWith = null,
		?string $accountPubnamecontains = null,
		?string $name = null,
		?string $namestartsWith = null,
		?string $nameendsWith = null,
		?string $namecontains = null,
		?\FoundryCo\Cloudflare\Enums\OrganizationsOrderBy $orderBy = null,
		?\FoundryCo\Cloudflare\Enums\OrganizationsDirection $direction = null,
		?string $pageToken = null,
		?int $pageSize = null,
	): mixed
	{
		return $this->client->get('/organizations/' . $organizationId . '/accounts', \FoundryCo\Cloudflare\Responses\OrganizationsGetAccounts::class, ['accountPubname' => $accountPubname ?? null, 'accountPubnamestartsWith' => $accountPubnamestartsWith ?? null, 'accountPubnameendsWith' => $accountPubnameendsWith ?? null, 'accountPubnamecontains' => $accountPubnamecontains ?? null, 'name' => $name ?? null, 'namestartsWith' => $namestartsWith ?? null, 'nameendsWith' => $nameendsWith ?? null, 'namecontains' => $namecontains ?? null, 'orderBy' => $orderBy ?? null, 'direction' => $direction ?? null, 'pageToken' => $pageToken ?? null, 'pageSize' => $pageSize ?? null]);
	}


	/**
	 * Get organization profile
	 */
	public function profile(string $organizationId): mixed
	{
		return $this->client->get('/organizations/' . $organizationId . '/profile', \FoundryCo\Cloudflare\Responses\OrganizationsGetProfile::class, []);
	}


	/**
	 * Modify organization profile.
	 */
	public function organizationsModifyProfile(
		string $organizationId,
		\FoundryCo\Cloudflare\Requests\OrganizationsModifyProfileRequest $request,
	): mixed
	{
		return $this->client->put('/organizations/' . $organizationId . '/profile', null, $request);
	}
}
