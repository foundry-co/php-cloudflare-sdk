<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CredentialSetsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Credential Sets
	 */
	public function list(?int $page = null, ?int $perPage = null): \FoundryCo\Cloudflare\Responses\CredentialSetsSets
	{
		return $this->client->get('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets', \FoundryCo\Cloudflare\Responses\CredentialSetsSets::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create Credential Set
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\CreateCredentialSetRequest $request,
	): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets', \FoundryCo\Cloudflare\Responses\CredentialSetsSet::class, $request);
	}


	/**
	 * Get Credential Set
	 */
	public function get(): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->get('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets/' . $credentialSetId, \FoundryCo\Cloudflare\Responses\CredentialSetsSet::class, []);
	}


	/**
	 * Update Credential Set
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\UpdateCredentialSetRequest $request,
	): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->put('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets/' . $credentialSetId, \FoundryCo\Cloudflare\Responses\CredentialSetsSet::class, $request);
	}


	/**
	 * Edit Credential Set
	 */
	public function credentialSets(
		\FoundryCo\Cloudflare\Requests\EditCredentialSetRequest $request,
	): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets/' . $credentialSetId, \FoundryCo\Cloudflare\Responses\CredentialSetsSet::class, $request);
	}


	/**
	 * Delete Credential Set
	 */
	public function delete(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets/' . $credentialSetId);
	}
}
