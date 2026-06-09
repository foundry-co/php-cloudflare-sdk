<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function get(?int $page = null, ?int $perPage = null): \FoundryCo\Cloudflare\Responses\CredentialsCredentials
	{
		return $this->client->get('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets/' . $credentialSetId . '/credentials', \FoundryCo\Cloudflare\Responses\CredentialsCredentials::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create Credential
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\CreateCredentialRequest $request,
	): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets/' . $credentialSetId . '/credentials', \FoundryCo\Cloudflare\Responses\CredentialsCredential::class, $request);
	}


	/**
	 * Get Credential
	 */
	public function credentials(): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->get('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets/' . $credentialSetId . '/credentials/' . $credentialId, \FoundryCo\Cloudflare\Responses\CredentialsCredential::class, []);
	}


	/**
	 * Update Credential
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\UpdateCredentialRequest $request,
	): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->put('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets/' . $credentialSetId . '/credentials/' . $credentialId, \FoundryCo\Cloudflare\Responses\CredentialsCredential::class, $request);
	}


	/**
	 * Edit Credential
	 */
	public function editCredential(
		\FoundryCo\Cloudflare\Requests\EditCredentialRequest $request,
	): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets/' . $credentialSetId . '/credentials/' . $credentialId, \FoundryCo\Cloudflare\Responses\CredentialsCredential::class, $request);
	}


	/**
	 * Delete Credential
	 */
	public function delete(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/vuln_scanner/credential_sets/' . $credentialSetId . '/credentials/' . $credentialId);
	}
}
