<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RegistrarRegistrationResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Registrations
	 */
	public function list(
		?string $cursor = null,
		?int $perPage = null,
		?\FoundryCo\Cloudflare\Enums\RegistrarRegistrationDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\RegistrarRegistrationSortBy $sortBy = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/registrar/registrations', null, ['cursor' => $cursor ?? null, 'perPage' => $perPage ?? null, 'direction' => $direction ?? null, 'sortBy' => $sortBy ?? null]);
	}


	/**
	 * Create Registration
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\RegistrarDomainRegistrationCreateRequest $request,
		?string $prefer = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/registrar/registrations', null, $request);
	}


	/**
	 * Get Registration
	 */
	public function get(string $domainName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/registrar/registrations/' . $domainName, null, []);
	}


	/**
	 * Update Registration
	 */
	public function update(
		string $domainName,
		\FoundryCo\Cloudflare\Requests\RegistrarDomainRegistrationUpdateRequest $request,
		?\FoundryCo\Cloudflare\Enums\RegistrarRegistrationPrefer $prefer = null,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/registrar/registrations/' . $domainName, null, $request);
	}


	/**
	 * Get Registration Status
	 */
	public function registrationStatus(string $domainName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/registrar/registrations/' . $domainName . '/registration-status', null, []);
	}


	/**
	 * Get Update Status
	 */
	public function updateStatus(string $domainName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/registrar/registrations/' . $domainName . '/update-status', null, []);
	}
}
