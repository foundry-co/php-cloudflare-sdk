<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CredentialsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Credentials
	 */
	public function get(?int $page = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets/' . $credentialSetId . '/credentials', \FoundryCo\Cloudflare\Responses\ListCredentials::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create Credential
	 */
	public function create(\FoundryCo\Cloudflare\Requests\CreateCredentialRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets/' . $credentialSetId . '/credentials', \FoundryCo\Cloudflare\Responses\CreateCredential::class, $request);
	}


	/**
	 * Get Credential
	 */
	public function credentials(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets/' . $credentialSetId . '/credentials/' . $credentialId, \FoundryCo\Cloudflare\Responses\GetCredential::class, []);
	}


	/**
	 * Update Credential
	 */
	public function update(\FoundryCo\Cloudflare\Requests\UpdateCredentialRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets/' . $credentialSetId . '/credentials/' . $credentialId, \FoundryCo\Cloudflare\Responses\UpdateCredential::class, $request);
	}


	/**
	 * Edit Credential
	 */
	public function editCredential(\FoundryCo\Cloudflare\Requests\EditCredentialRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets/' . $credentialSetId . '/credentials/' . $credentialId, \FoundryCo\Cloudflare\Responses\EditCredential::class, $request);
	}


	/**
	 * Delete Credential
	 */
	public function delete(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets/' . $credentialSetId . '/credentials/' . $credentialId);
	}
}
