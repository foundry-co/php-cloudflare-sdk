<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(?int $page = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets', \FoundryCo\Cloudflare\Responses\ListCredentialSets::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create Credential Set
	 */
	public function create(\FoundryCo\Cloudflare\Requests\CreateCredentialSetRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets', \FoundryCo\Cloudflare\Responses\CreateCredentialSet::class, $request);
	}


	/**
	 * Get Credential Set
	 */
	public function get(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets/' . $credentialSetId, \FoundryCo\Cloudflare\Responses\GetCredentialSet::class, []);
	}


	/**
	 * Update Credential Set
	 */
	public function update(\FoundryCo\Cloudflare\Requests\UpdateCredentialSetRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets/' . $credentialSetId, \FoundryCo\Cloudflare\Responses\UpdateCredentialSet::class, $request);
	}


	/**
	 * Edit Credential Set
	 */
	public function credentialSets(\FoundryCo\Cloudflare\Requests\EditCredentialSetRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets/' . $credentialSetId, \FoundryCo\Cloudflare\Responses\EditCredentialSet::class, $request);
	}


	/**
	 * Delete Credential Set
	 */
	public function delete(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets/' . $credentialSetId);
	}
}
